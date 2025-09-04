<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomTypes = RoomType::orderBy('code')->paginate(12);
        return view('room_types.index', compact('roomTypes'));
    }

    public function create()
    {
        return view('room_types.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code'        => 'required|string|max:10|unique:room_types,code',
            'description' => 'nullable|string|max:255',
        ]);

        RoomType::create($data);

        return redirect()->route('room-types.index')->with('success', 'Room type created.');
    }

    public function show(RoomType $roomType)
    {
        return view('room_types.show', compact('roomType'));
    }

    public function edit(RoomType $roomType)
    {
        return view('room_types.edit', compact('roomType'));
    }

    public function update(Request $request, RoomType $roomType)
    {
        $data = $request->validate([
            'code'        => 'required|string|max:10|unique:room_types,code,' . $roomType->room_type_id . ',room_type_id',
            'description' => 'nullable|string|max:255',
        ]);

        $roomType->update($data);

        return redirect()->route('room-types.index')->with('success', 'Room type updated.');
    }

    public function destroy(RoomType $roomType)
    {
        $roomType->delete();
        return redirect()->route('room-types.index')->with('success', 'Room type deleted.');
    }
}
