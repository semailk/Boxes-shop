<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientFeedbackRequest;
use App\Models\Feedback;

class AccountController extends Controller
{

    public function login()
    {
        return view('black-shop.account-login');
    }

    public function changeLocale($locale)
    {
//        session(['locale' => $locale]);
//        \App::setLocale($locale);
        return redirect()->back();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function termsAndConditions(): \View
    {
        return view('black-shop.terms-and-conditions');
    }

    public function contactUs()
    {
        return view('black-shop.contact-us');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function aboutUs(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('black-shop.about-us');
    }

    public function feedbackStore(ClientFeedbackRequest $request)
    {
        Feedback::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        return redirect()->route('contactUs')->with([
            'success' => 'Сообщения доставлено.'
        ]);
    }
}
