<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Entities\TestEmail;
use Yajra\Datatables\Datatables;
use App\Mail\MailClass;
use Illuminate\Support\Facades\Mail;

class PostsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = TestEmail::all();
        return view('index', compact('posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $posts = TestEmail::all();
        return view('testTask.show', compact('posts'));
    }


    public function create()
    {
        return view("testTask.create");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $data = request()->all();
        if ($data['BDC_BackWorkaround_ExampleCaptcha'] == 1) {
            $data = $this->preparationData($data);
            if (is_array($data)) {
                TestEmail::create($data);
            } else {
                return $data;
            }
            $this->send_form($data);
            return redirect('/show');
        } else {
            echo "Code entered incorrectly";
        }
    }

    /**
     * @param $originData
     * @return array
     */
    private function preparationData($originData)
    {
        $duplicate = $this->getEmail($originData['email']);
        if (!$duplicate) {
            $data = [];
            $data['userName'] = strip_tags($originData['userName']);
            $data['email'] = strip_tags($originData['email']);
            if ($originData['homepage']) {
                $data['homepage'] = strip_tags($originData['homepage']);
            }
            $data['msg'] = strip_tags($originData['msg']);
            $data['ip'] = $_SERVER['REMOTE_ADDR'];
            $data['browser'] = $_SERVER['HTTP_USER_AGENT'];
            return $data;
        } else {
            return $data = "This emails is already in use";
        }
    }

    /**
     * @param $email
     * @return bool|\Illuminate\Support\Collection
     */
    protected function getEmail($email)
    {
        $duplicate = TestEmail::where('email', '=', $email)->value('email');
        return $duplicate;
    }

    /**
     * @param $data
     */
    protected function send_form($data)
    {
        if (filter_var(env('MAIL_FROM_ADDRESS'), FILTER_VALIDATE_EMAIL)) {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MailClass($data['userName'], $data['email'], $data['msg']));;
        } else {
            echo "E-mail is incorrect.\n";;
        }
    }
}
