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
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {

//        return response()->json($this->registrationMethodIsActive('email'));

        // identify registration method (username/email/social-media/phone-number)


        if ($this->registrationMethodIsNotValid('$method')){
            return response()->json('invalid registration method',404);
        }

        if (!$this->registrationMethodIsActive('$method')){
            return response()->json('this registration method is not active',403);
        }

        return $next($request);
    }

    private function identifyRegistrationMethod()
    {

    }

    private function registrationMethodIsActive(string $method)
    {
        $registratoinMethod = Config::get('laraAuthApi.registrationMethods.' . $method);
        return $registratoinMethod === true;
    }

    public function registrationMethodIsNotValid(string $method)
    {
        $registratoinMethod = Config::get('laraAuthApi.registrationMethods.' . $method);
        return empty($registratoinMethod);
    }
}
