<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eventRegistration;
use Auth;

class CommunityController extends Controller
{
    
    public function eventParticipantsTable(){
        // if auth user has email id equal to ecellrgpv@gmail.com then only he can access this page
        if(Auth::user()->email == 'ecellrgpv@gmail.com'){
            $result[ 'data' ] = eventRegistration::all();
        return view('community/pages/event-part-table', $result);
        }
        else{
            return redirect('/community/dashboard');
        }
        
    }
}
