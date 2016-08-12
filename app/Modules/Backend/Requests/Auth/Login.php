<?php

namespace App\Modules\Backend\Requests\Auth;

use App\Http\Requests\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Login extends Request
{
    use ValidatesRequests;

    /**
     * Register request fields.
     *
     * @return void
     */
    public function elements()
    {

    }
}
