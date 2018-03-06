<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Services\SocialTwitterAccountService;
use Illuminate\Http\Request;
use Socialite;


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
     * Create a redirect method to twitter api.
     *
     * @return void
     */
      public function redirect()
      {
          return Socialite::driver('twitter')->redirect();
      }

    /**
     * Return a callback method from twitter api.
     *
     * @return callback URL from twitter
     */
    public function callback(SocialTwitterAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('twitter')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
}