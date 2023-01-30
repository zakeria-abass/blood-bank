<?php

namespace App\Http\Controllers\Hospitals\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user('hospital')->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOSPITALS.'?verified=1');
        }

        if ($request->user('hospital')->markEmailAsVerified()) {
            event(new Verified($request->user('hospital')));
        }

        return redirect()->intended(RouteServiceProvider::HOSPITALS.'?verified=1');
    }
}
