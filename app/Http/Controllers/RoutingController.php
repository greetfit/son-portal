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

    /**
     * Map role names → allowed view keys (folder.file)
     * super_admin is treated as "allow all" in authorizeView()
     */
    // protected array $rolePermissions = [
    //     'manager' => [
    //         'dashboards.manager',
    //         // add other manager views here...
    //     ],
    //     'user' => [
    //         'dashboards.customer',
    //     ],
    //     // You don't need to list super_admin here — it bypasses checks.
    // ];

    // protected array $rolePermissions = [
    //     'super_admin' => [], // not used (super_admin bypasses checks)
    //     'manager'     => ['dashboards.manager'],
    //     'user'        => ['dashboards.customer'],
    //     'dmc'         => [
    //         ''
    //     ],
    // ];

    protected array $rolePermissions = [
        'super_admin' => [], // not used (super_admin bypasses checks)
        'manager'     => ['dashboards.manager'],
        'user'        => ['dashboards.customer','property.grid'],
        'dmc'         => [
            // put the exact view keys DMC can access:
            'dashboards.customer',
            // add more as needed...
        ],
    ];

    public function index(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $roleName = $user->role?->name; // ← NEW: pull from relation

        switch ($roleName) {
            case 'super_admin':
                return redirect('/dashboards/analytics');
            case 'DMC':
                return redirect('/dashboards/analytics');

            case 'manager':
                return redirect('/dashboards/manager');

            case 'user':
                return redirect('/dashboards/customer');

            default:
                return redirect('/pages/error-403');
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
        $user = auth()->user();
        $roleName = $user?->role?->name ?? 'guest';

        // Normalize to lowercase to avoid case mismatches like "DMC"
        $roleKey = strtolower($roleName);

        // super_admin can see everything
        if ($roleKey === 'super_admin') {
            return true;
        }

        // If this view isn’t in their allowed list → block
        if (!in_array($view, $this->rolePermissions[$roleKey] ?? [], true)) {
            abort(403, 'You do not have permission to access this page.');
        }
    }
}
