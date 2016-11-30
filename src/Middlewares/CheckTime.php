<?php

namespace Alihossein\Time\Middlewares;

use Carbon\Carbon;
use Closure;

class CheckTime
{
    /**
     * @param         $request
     * @param Closure $next
     * @param         $time
     *
     * @return mixed
     */
    public function handle($request, Closure $next,$time)
    {

        if(Carbon::now()->second > $time)
        {
            return redirect('/');
        }
        
        return $next($request);
    }
}
