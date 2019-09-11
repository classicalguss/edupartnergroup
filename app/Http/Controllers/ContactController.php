<?php

namespace App\Http\Controllers;

use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'email',
            'phonenumber' => ['required', new PhoneNumber()],
            'firstname' => 'required',
            'lastname' => 'required',
            'schoolname' => 'required',
            'schooladdress' => 'required',
            'numofstudents' => 'required',
            'schoolsector' => 'required',
            'servicetype' => 'required',
        ]);
        return redirect()->route("home");
    }


}
