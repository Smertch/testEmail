<?php
/**
 * Created by PhpStorm.
 * User: smertch
 * Date: 23.09.17
 * Time: 22:12
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function getExample()
    {
        return view('example');
    }

    public function postExample(Request $request)
    {
        // validate the user-entered Captcha code when the form is submitted
        $code = $request->input('CaptchaCode');
        $isHuman = captcha_validate($code);

        if ($isHuman) {
            //
        } else {
            //
        }
    }

}