<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoutingController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected array $rolePermissions = [
        'super_admin' => [
            'dashboards.analytics',
            'dashboards.customer',
            'users.manage',
            'agents.list',
            '',
        ],
        'user' => [
            'dashboards.customer',
        ],
    ];

    public function index(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    switch ($user->role) {
        case 'super_admin':
            return redirect('/dashboards/analytics');

        case 'manager':
            return redirect('/dashboards/manager'); // 👈 your manager dashboard

        case 'user':
            return redirect('/dashboards/customer');

        default:
            return redirect('/pages/error-403'); // or a generic page
    }
}

    public function secondLevel(Request $request, $first, $second)
    {
        $view = "{$first}.{$second}";
        $this->authorizeView($view);

        return view($view);
    }

    public function thirdLevel(Request $request, $first, $second, $third)
    {
        $view = "{$first}.{$second}.{$third}";
        $this->authorizeView($view);

        return view($view);
    }

    protected function authorizeView(string $view)
    {
        $role = auth()->user()->role ?? 'guest';

        // super_admin can see everything
        if ($role === 'super_admin') {
            return true;
        }

        // If this view isn’t in their allowed list → block
        if (!in_array($view, $this->rolePermissions[$role] ?? [])) {
            abort(403, 'You do not have permission to access this page.');
        }
    }
}
