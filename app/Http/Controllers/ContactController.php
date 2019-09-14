<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactRequested;
use App\NumberOfStudentsOption;
use App\Rules\PhoneNumber;
use App\SchoolSectorOption;
use App\ServiceOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $number_of_students_options = NumberOfStudentsOption::orderBy('id')->get();
        $school_sector_options = SchoolSectorOption::orderBy('id')->get();
        $service_type_options = ServiceOption::orderBy('id')->get();
        $prev_contact = new Contact;
        if (isset($_COOKIE['last_contact'])) {
            $contact_vals = json_decode($_COOKIE['last_contact'], true);
            foreach ($prev_contact->getFillable() as $attribute) {
                $prev_contact->setAttribute($attribute, $contact_vals[$attribute]);
            }
        }
        $service = $request->input('service');
        return view('contact.create', compact('number_of_students_options',
            'school_sector_options',
            'service_type_options',
            'prev_contact',
            'service'));
    }

    public function store(Request $request)
    {
        $contact = $this->validate($request, [
            'email' => 'email',
            'phone_number' => ['required', new PhoneNumber()],
            'first_name' => 'required',
            'last_name' => 'required',
            'school_name' => 'required',
            'school_address' => 'required',
            'number_of_students_option_id' => 'required',
            'school_sector_option_id' => 'required',
            'service_option_id' => 'required',
        ]);
        $contact['optional_message'] = $request['optional_message'];
        setcookie('last_contact', json_encode($contact, true), time() + (3600 * 24 * 60));
        $contact = Contact::create($contact);

        Mail::to(["barghouti_since88@hotmail.com", "g.barghouti@edupartnergroup.com"])->send(new ContactRequested($contact));
        return redirect()->route("success");
    }

    public function success()
    {
        return view('contact.success');
    }
}
