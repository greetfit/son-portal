<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('manager')->paginate(10);
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        $managers = User::all();
        return view('hotels.create', compact('managers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:255',
            'city'            => 'required|string|max:255',
            'email'           => 'nullable|email',
            'phone'           => 'nullable|string|max:50',
            'account_manager' => 'nullable|exists:users,id',
            'is_active'       => 'boolean',
        ]);

        Hotel::create($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully.');
    }

    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        $managers = User::all();
        return view('hotels.edit', compact('hotel','managers'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'name'            => 'required|string|max:255',
            'city'            => 'required|string|max:255',
            'email'           => 'nullable|email',
            'phone'           => 'nullable|string|max:50',
            'account_manager' => 'nullable|exists:users,id',
            'is_active'       => 'boolean',
        ]);

        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotel updated successfully.');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully.');
    }
}
