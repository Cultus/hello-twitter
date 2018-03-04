<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the index page.
     *
     * @return Response
     */
    public function show_index()
    {
        return view('welcome');
    }

    /**
     * Show the submtited page.
     *
     * @return Response
     */
    public function show_create()
    {
        $result = 'Init';
        $result = \Twitter::post("statuses/update", array("status" => "テストメッセージ"));
        $result = json_encode($result);
        return view('welcome', compact('result'));
    }
}