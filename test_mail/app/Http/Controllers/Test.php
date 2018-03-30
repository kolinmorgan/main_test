<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class Test extends Controller {

    public function register() {
        echo 'Подтвердит регистрацию на почте';
//        $identu_email = $reauest->input('email');
//        echo $identu_email;
//        $user = DB::table('users')->where('name','Andrej')->value('email');
//        echo $user;
    }

}
