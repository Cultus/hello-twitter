<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;


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
        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret'),
            config('twitter.access_token'),
            config('twitter.access_token_secret')
        );
        $result = $twitter->post(
            'statuses/update',
            array('status' => 'テストメッセージ')
        );
        $result = json_encode($result);
        if($twitter->getLastHttpCode() === 200) {
            return view('welcome', compact('result'));
        } else {
            return view('welcome', compact('result'));
        }
    }

    /**
     * Show the submtited page.
     *
     * @return Response
     */
    public function twitter()
    {
        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );

        $token = $twitter->oauth('oauth/request_token', array(
            'oauth_callback' => config('twitter.oauth_callback')
        ));

        session(array(
            'oauth_token' => $token['oauth_token'],
            'oauth_token_secret' => $token['oauth_token_secret'],
        ));

        $url = $twitter->url('oauth/authenticate', array(
            'oauth_token' => $token['oauth_token']
        ));

        return redirect($url);
    }

    /**
     * Show the submtited page.
     *
     * @return Response
     */
    public function twitterCallback(Request $request)
    {
        $oauth_token = session('oauth_token');
        $oauth_token_secret = session('oauth_token_secret');

        if ($request->has('oauth_token') && $oauth_token !== $request->oauth_token) {
            return Redirect::to('/login');
        }

        $twitter = new TwitterOAuth(
            $oauth_token,
            $oauth_token_secret
        );
        $token = $twitter->oauth('oauth/access_token', array(
            'oauth_verifier' => $request->oauth_verifier,
            'oauth_token' => $request->oauth_token,
        ));

        $twitter_user = new TwitterOAuth(
            $token['oauth_token'],
            $token['oauth_token_secret']
        );

        $twitter_user_info = $twitter_user->get('account/verify_credentials');
        dd($twitter_user_info);
    }

    /**
     * Show the submtited page.
     *
     * @return Response
     */
    public function getTimeline(Request $request)
    {
        $user = User::find(Auth::user()->user_id);

        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        $timeline = $twitter->get('statuses/user_timeline', array(
            'user_id' => Auth::User()->twitter_id,
        ));
        dd($ret);
    }

    /**
     * Show the submtited page.
     *
     * @return Response
     */
    public function getFollowList(Request $request)
    {
        $user = User::find(Auth::user()->user_id);

        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        $timeline = $twitter->get('friends/list', array(
            'user_id' => Auth::User()->twitter_id,
        ));
        dd($ret);
    }

    /**
     * Show the submtited page.
     *
     * @return Response
     */
    public function getFollowerList(Request $request)
    {
        $user = User::find(Auth::user()->user_id);

        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        $timeline = $twitter->get('followers/list', array(
            'user_id' => Auth::User()->twitter_id,
        ));
        dd($ret);
    }
}