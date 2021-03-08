<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contactFormSubmit(Request $request){

        $input = $request->all();

        //Add all values to data array
        $data = [
            'name' => $input['name'],
            'email' => $input['email'],
            'mobile' => $input['mobile'],
            'send_message' => $input['send_message'],
        ];

        //send email to user
        Mail::send('emails.contact-message', $data, static function($message) use ($data){
            $message->from('info@fltransnational.com', 'Future Logistic Transnational Company');
            $message->to('info@fltransnational.com', 'Future Logistic Transnational Company');
            $message->replyTo('info@fltransnational.com', 'Future Logistic Transnational Company');
            $message->subject('Contact message from '.$data['name']);
        });

        //flash notification
        Session::flash('success', 'Message sent');
        return redirect()->back();
    }
}
