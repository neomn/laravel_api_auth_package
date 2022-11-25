<?php

namespace neomn\laravel_auth_api\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
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

        if ($this->registrationMethodIsNotActive($method))
            return response()->json('this registration method is not active',403);

        return $next($request);
    }

    private function identifyRegistrationMethodOfIncomingRequest(Request $request)
    {
        $method = '';
        $howManyRegistrationMethodPresentInRequest = 0;

        if ($request->has('user_name')){
            $howManyRegistrationMethodPresentInRequest++;
            $method = 'user_name';
        }

        if ($request->has('email')){
            $howManyRegistrationMethodPresentInRequest++;
            $method = 'email';
        }

        if ($request->has('phone_number')){
            $howManyRegistrationMethodPresentInRequest++;
            $method = 'phone_number';
        }

        if ($request->has('social_media')){
            $howManyRegistrationMethodPresentInRequest++;
            $method = 'social_media';
        }

        if ($howManyRegistrationMethodPresentInRequest > 1)
            throw new BadRequestException('there is more than one registration method in request!');

        return $method;
    }

    public function registrationMethodIsNotValid(string $method)
    {
        $registrationMethod = Config::get('laraAuthApi.registrationMethods.' . $method);
        return $registrationMethod === '';
    }

    private function registrationMethodIsNotActive(string $method)
    {
        $registrationMethod = Config::get('laraAuthApi.registrationMethods.' . $method);
        return $registrationMethod === true;
    }
}
