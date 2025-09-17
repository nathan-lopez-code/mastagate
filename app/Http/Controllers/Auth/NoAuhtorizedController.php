<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


class NoAuhtorizedController extends Controller
{
    /**
     * Page pour les utilisateurs non authoriser.
     */
    public function zeroAccess()
    {
        return view('auth.no-authorized');

    }
}
