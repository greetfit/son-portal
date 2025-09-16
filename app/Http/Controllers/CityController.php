<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
{
    public function getCitiesByDistrict(int $district_id): JsonResponse
    {
        $cities = City::where('district_id', $district_id)
            ->orderBy('name_en')
            ->get(['id', 'name_en']);

        return response()->json($cities);
    }
}
