<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Enums\Users_code;
Use RealRashid\SweetAlert\Facades\Alert;
class Access_page_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $user_access = "all"): Response
    {
        if ($user_access == "all") {
            return $next($request);
        } else {
            $access_code_user = Auth::user()->level;
            foreach (explode('#',$user_access) as $key=>$value){
                if(Users_code::getKey($access_code_user) == $value){
                    return $next($request);
                }
            }
        }
        Alert::error('خطا', 'عدم دسترسی');
        return redirect(route('form_login'));
    }
}

