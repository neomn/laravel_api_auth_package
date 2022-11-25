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
        $method = $this->identifyRegistrationMethodOfIncomingRequest($request);
        if ($this->registrationMethodIsNotValid($method))
            return response()->json('invalid registration method',404);

        if (!$this->registrationMethodIsActive($method))
            return response()->json('this registration method is not active',403);

        return $next($request);
    }

    private function identifyRegistrationMethodOfIncomingRequest(Request $request)
    {
        if ($request->has('user_name'))
            return 'username';

        if ($request->has('email'))
            return 'email';

        if ($request->has('phone_number'))
            return 'phone_number';

        if ($request->has('social_media'))
            return 'social_media';

        return '';
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
