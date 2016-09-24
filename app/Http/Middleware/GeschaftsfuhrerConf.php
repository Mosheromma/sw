<?php

namespace SWeg\Http\Middleware;

use Closure;

class GeschaftsfuhrerConf
{

    protected $auth;

    public function __construct(Guard $auth){

        $this->auth = $auth;

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if($this->auth->user()->user_priv == 1){
         return $next($request);

        } elseif ($this->auth->user()->user_priv == 2){
         return $next($request);
        } else { 

        
        return redirect()->to('admin/nopermision');
         }
        return $next($request);
    }
}
