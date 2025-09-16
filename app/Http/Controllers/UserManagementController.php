<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        // Eager load role so blade can use $user->role?->name without N+1 queries
        $users = User::with('role')->latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        // For the <select name="role_id">
        $roles = Role::orderBy('name')->get(['id', 'name']);
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'role_id'   => 'required|exists:roles,id',
            'is_active' => 'sometimes|boolean',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role_id'   => $request->role_id,
            // 'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        $roles = Role::orderBy('name')->get(['id', 'name']);
        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255|unique:users,email,' . $user->id,
            'role_id'   => 'required|exists:roles,id',
            'password'  => 'nullable|string|min:6|confirmed',
            // 'is_active' => 'sometimes|boolean',
        ]);

        // Prevent removing the last super_admin
        $currentIsSuper = $user->role?->name === 'super_admin';
        $newIsSuper = Role::where('id', $request->role_id)->value('name') === 'super_admin';

        if ($currentIsSuper && ! $newIsSuper) {
            $otherSupers = User::whereHas('role', fn($q) => $q->where('name', 'super_admin'))
                               ->where('id', '!=', $user->id)
                               ->count();
            if ($otherSupers === 0) {
                return back()->withErrors(['role_id' => 'You cannot remove the last Super Admin.'])->withInput();
            }
        }

        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->role_id   = $request->role_id;
        // $user->is_active = $request->boolean('is_active', $user->is_active);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        // Prevent deleting yourself
        if (auth()->id() === $user->id) {
            return back()->withErrors(['delete' => 'You cannot delete your own account while logged in.']);
        }

        // Prevent deleting the last super_admin
        if ($user->role?->name === 'super_admin') {
            $otherSupers = User::whereHas('role', fn($q) => $q->where('name', 'super_admin'))
                               ->where('id', '!=', $user->id)
                               ->count();
            if ($otherSupers === 0) {
                return back()->withErrors(['delete' => 'You cannot delete the last Super Admin.']);
            }
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
