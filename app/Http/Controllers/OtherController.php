<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function invitePeople() {
        return view('invite-people');
    }

    public function getJobList() {
        return view('jobList');
    }

    public function getJobDetail() {
        return view('jobDetail');
    }

    public function contact() {
        return view('contact');
    }

    public function test() {
        return view('test');
    }
}
