<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $number_of_students_options = DB::table('num_of_students_options')->orderBy('id')->get();
        $school_sector_options = DB::table('school_sector_options')->get();
        $service_type_options = DB::table('services_options')->get();
        $prev_contact = new Contact;
        if (isset($_COOKIE['last_contact'])) {
            $contact_vals = json_decode($_COOKIE['last_contact'], true);
            foreach ($prev_contact->getFillable() as $attribute) {
                $prev_contact->setAttribute($attribute, $contact_vals[$attribute]);
            }
        }

        return view('contact.create', compact('number_of_students_options', 'school_sector_options', 'service_type_options', 'prev_contact'));
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
            'number_of_students_option' => 'required',
            'school_sector_option' => 'required',
            'service_type_option' => 'required',
        ]);
        $contact['optional_message'] = $request['optional_message'];
        setcookie('last_contact', json_encode($contact, true), time() + (3600 * 24 * 30));
        Contact::create($contact);
        return redirect()->route("success");
    }

    public function success()
    {
        return view('contact.success');
    }
}
