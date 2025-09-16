<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use App\Models\Amenity;
use App\Models\Category;
use App\Models\District;
use App\Models\City;
use App\Models\RoomType;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        // Just render the Grid.js page; data comes via AJAX from datatable()
        return view('hotels.index');
    }

    public function datatable()
    {
        $hotels = Hotel::with('manager')
            ->orderByDesc('created_at')
            ->get()
            ->map(function ($h) {
                return [
                    $h->hotel_id,
                    $h->name,
                    $h->email ?? '—',
                    $h->city ?? '—',
                    optional($h->manager)->name ?? '—',
                    $h->is_active ? 'Active' : 'Inactive',
                    // Action buttons (Edit / Delete links)
                    view('hotels.partials.actions', ['hotel' => $h])->render(),
                ];
            });

        return response()->json($hotels);
    }

    public function create()
    {
        $users      = User::orderBy('name')->get(['id', 'name']);
        $amenities  = Amenity::orderBy('name')->get(['id as id', 'name']);
        $categories = Category::orderBy('name')->get(['id as id', 'name']);
        $districts = District::orderBy('name_en')->get(['id','name_en']);
        $cities = City::orderBy('name_en')->get([ 'id','name_en']);
        $roomTypes = RoomType::orderBy('name')->get(['id', 'name']);
        $roomCategories = RoomCategory::where('type', 'room')->orderBy('name')->get(['category_id', 'name']);

        return view('hotels.create', compact('users', 'amenities', 'categories','districts','cities', 'roomTypes', 'roomCategories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'            => ['required', 'string', 'max:255'],
            'category_notes'  => ['nullable', 'string', 'max:1000'],
            'city'            => ['nullable', 'string', 'max:255'],
            'address'         => ['nullable', 'string', 'max:500'],
            'phone'           => ['nullable', 'string', 'max:50'],
            'email'           => ['nullable', 'email', 'max:255'],
            'account_manager' => ['nullable', 'integer', 'exists:users,id'],
            'is_active'       => ['nullable', 'boolean'],
            'amenities'       => ['nullable', 'array'],
            'amenities.*'     => ['integer', 'exists:amenities,amenity_id'],
            'categories'      => ['nullable', 'array'],
            'categories.*'    => ['integer', 'exists:categories,category_id'],
            // If you handle images, add validation here (e.g., 'photos.*' => 'image|max:2048')
        ]);

        $data['is_active'] = (int) ($data['is_active'] ?? 0);
    }


    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $data = $request->validate([
            'name'            => ['required', 'string', 'max:255'],
            'category_notes'  => ['nullable', 'string', 'max:1000'],
            'city'            => ['nullable', 'string', 'max:255'],
            'address'         => ['nullable', 'string', 'max:500'],
            'phone'           => ['nullable', 'string', 'max:50'],
            'email'           => ['nullable', 'email', 'max:255'],
            'account_manager' => ['nullable', 'integer', 'exists:users,id'],
            'is_active'       => ['nullable', 'boolean'],
        ]);
        $data['is_active'] = (int) ($data['is_active'] ?? 0);

        $hotel->update($data);

        return redirect()->route('hotels.index')->with('success', 'Hotel updated.');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hotel deleted.');
    }
}
