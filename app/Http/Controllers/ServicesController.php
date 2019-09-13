<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function audit() {
        return view('services.audit');
    }

    public function schoolManagement() {
        return view('services.schoolmanagement');
    }

    public function teachersTraining() {
        return view('services.teacherstraining');
    }

    public function teachersRecruitment() {
        return view('services.teachersrecruitment');
    }
}
