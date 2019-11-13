<?php

namespace Laravel\Passport\Bridge;

use Illuminate\Support\Facades\Auth;

class ProviderQuery
{
    /**
     * Get current User Provider Model
     *
     * @return string
     */
    public static function getModel()
    {
        return isset(Auth::guard()->userProviderModel) ?
            Auth::guard()->userProviderModel : Auth::guard()->getProvider()->getModel();
    }
}
