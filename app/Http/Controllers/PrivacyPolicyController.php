<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class PrivacyPolicyController extends Controller
{
    /**
     * Show the privacy policy for the application.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function show(Request $request)
    {
        return view('terms-and-policy.policy');
    }
}
