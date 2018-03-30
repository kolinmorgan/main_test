<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Mail\MailTrap;
use Auth;

class TestController extends Controller {

    public function confirm($token) {
        $user = User::where('token',$token)->first();
        if($user === null) {
            abort(404);
        }
        $user->emailConfirm();
        Auth::login($user);
        
        return redirect('/home')->withMessage([
            'status' => 'Your email hes been confirmation(lol)'
        ]);
    }

    
    
    
    public function sendEmail($thisUser) {
        Mail::to($thisUser['email'])->send(new MailTrap($thisUser));
    }
    
    public function verifyEmail() {
        return view('mail.contact-mail');
    }

}
