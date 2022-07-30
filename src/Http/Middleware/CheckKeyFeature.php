<?php

namespace Fluent\Licensor\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

/**
 * Class CheckKeyFeature
 */
class CheckKeyFeature
{
    /**
     * @param Request $request
     * @param Closure $next
     * @param string|array $featureId
     * @return mixed
     */
    public function handle($request, Closure $next, $featureId)
    {
        $user = $request->user();

        abort_unless($user instanceof User
            && method_exists($user, 'hasKeyFeature')
            && $user->hasKeyFeature($featureId), 403);

        return $next($request);
    }
}
