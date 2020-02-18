<?php

namespace App\Http\Controllers;

use App\logindata;
use Illuminate\Http\Request;

class LogindataController extends Controller
{
    //
    public function checkuser(Request $request)
    {
        session_start();
        $c = 0;
        $email1 = $request->get('email');
        $pass = $request->get('password');

        $details = logindata::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                $request->session()->put('rule', $value['userroles']);
                $_SESSION['rule'] = $value['userroles'];
                return redirect("/home");
$c=1;
            }
        }
        if ($c == 0) {
            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/login");


        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        session_start();
        $_SESSION['rule'] = 0;
        session_destroy();

        return redirect("/login");
    }

}
