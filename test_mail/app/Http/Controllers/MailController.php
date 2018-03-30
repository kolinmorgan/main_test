<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTrap;

class MailController extends Controller {

    public function send_form(Request $request) {

        $name = $request->name;
        $email = $request->email;

        Mail::to('mail@gmal.com')->send(new MailTrap($name, $email));
        echo 'message send';
    }

}
