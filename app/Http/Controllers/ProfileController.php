<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewProfile(){
        return view('user.pages.user-profile');
    }
    public function editProfile(){
        return view('user.pages.user-profile-edit');
    }
    public function settingsProfile(){
        return view('user.pages.user-profile-settings');
    }


}
