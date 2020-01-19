<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Project;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BelongsToProject
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	if ($project = Project::find($request->project_id)) {
		    return $next($request);
	    }
	    else {
    	    throw new NotFoundHttpException('The requested project does not exist!');
	    }
    }
}
