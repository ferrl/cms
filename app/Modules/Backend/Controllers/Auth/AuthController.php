<?php

namespace App\Modules\Backend\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Show the application login form.
     *
     * @var string
     */
    protected $loginView = 'backend::auth.authenticate';

    /**
     * Get the post register / login redirect path.
     *
     * @var string
     */
    protected $redirectPath = '/admin/dashboard';

    /**
     * Log the user out of the application.
     *
     * @var string
     */
    protected $redirectAfterLogout = '/admin/sign_in';

    /**
     * Get the guard to be used during authentication.
     *
     * @var string
     */
    protected $guard = 'users';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
}
