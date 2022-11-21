<?php

namespace neomn\laravel_auth_api\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use function PHPUnit\Framework\isEmpty;

class Register
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        return response()->json($this->registrationMethodIsNotValid('email4'));

        // identify registration method (username/email/social-media/phone-number)


        //check if the registration method is active


        return $next($request);
    }

    private function identifyRegistrationMethod(){

    }

    private function registrationMethodIsActive(string $method)
    {

    }

    public function registrationMethodIsNotValid(string $method)
    {
        $registratoinMethod = Config::get('laraAuthApi.registrationMethods.'.$method);
        return empty($registratoinMethod);
    }
}
