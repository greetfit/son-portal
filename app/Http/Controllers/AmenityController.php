<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AmenityController extends Controller
{
    public function index(Request $request)
    {
        $items = Amenity::query()
            ->when($request->search, function ($q, $search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('category', 'like', "%$search%");
            })
            ->orderBy($request->get('sort_by', 'updated_at'), $request->get('sort_dir', 'desc'))
            ->paginate($request->get('per_page', 10))
            ->appends($request->query());

        return Inertia::render('Amenity/Index', [
            'items' => $items,
            'filters' => $request->only(['search', 'sort_by', 'sort_dir', 'per_page']),
        ]);
    }

    public function create()
    {
        return Inertia::render('Amenity/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:150'],
            'category' => ['required', 'in:Basic,Facility,Premium'],
        ]);

        Amenity::create($data);

        return redirect()->route('amenities.index')->with('success', 'Amenity created.');
    }

    public function show(Amenity $amenity)
    {
        return Inertia::render('Amenity/Show', ['item' => $amenity]);
    }

    public function edit(Amenity $amenity)
    {
        return Inertia::render('Amenity/Edit', ['item' => $amenity]);
    }

    public function update(Request $request, Amenity $amenity)
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:150'],
            'category' => ['required', 'in:Basic,Facility,Premium'],
        ]);

        $amenity->update($data);

        return redirect()->route('amenities.index')->with('success', 'Amenity updated.');
    }

    public function destroy(Amenity $amenity)
    {
        $amenity->delete();

        return redirect()->route('amenities.index')->with('success', 'Amenity deleted.');
    }
}
