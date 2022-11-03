<?php

namespace App\Http\Controllers;

use App\Models\eventRegistration;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userindex() {
        return view( 'user/pages/event-preview' );
    }
    public function communityindex() {
        return view( 'community/pages/event-preview' );
    }

    public function register( Request $request ) {
        $request->validate( [
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required|integer',
            'watsapp'=>'required|integer',
            'college'=>'required',
            'year'=>'required',
            'branch'=>'required',
        ] );

        $interest = $request->post( 'interest' );
        $data = json_decode( $interest, true );
        $csv_data = collect( $data )->pluck( 'value' )->implode( ',' );

        $radio = $request->post( 'current_startup' );
        $yourval = ( isset( $radio ) ) ? 1 : 0;

        $model = new eventRegistration();
        $model->name = $request->post( 'name' );
        $model->email = $request->post( 'email' );
        $model->contact = $request->post( 'contact' );
        $model->contact = $request->post( 'watsapp' );
        $model->college = $request->post( 'college' );
        $model->year = $request->post( 'year' );
        $model->branch = $request->post( 'branch' );
        $model->enrollment_no = $request->post( 'enrollment_no' );
        $model->interest = $csv_data;
        $model->current_startup = $yourval;
        $model->why_join = $request->post( 'why_join' );
        $model->pre_idea = $request->post( 'pre_idea' );
        $model->save();

        $request->session()->flash( 'message', 'form subbmited successfully' );
        return redirect('/event/edp');
        // echo 'successfull';
    }
    


}
