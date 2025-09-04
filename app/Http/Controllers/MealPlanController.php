<?php

namespace App\Http\Controllers;

use App\Models\MealPlan;
use Illuminate\Http\Request;

class MealPlanController extends Controller
{
    public function index()
    {
        $mealPlans = MealPlan::orderBy('code')->paginate(12);
        return view('meal_plans.index', compact('mealPlans'));
    }

    public function create()
    {
        return view('meal_plans.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code'        => 'required|string|max:10|unique:meal_plans,code',
            'description' => 'nullable|string|max:255',
        ]);

        MealPlan::create($data);

        return redirect()->route('meal-plans.index')->with('success', 'Meal plan created.');
    }

    public function show(MealPlan $meal_plan)
    {
        return view('meal_plans.show', ['mealPlan' => $meal_plan]);
    }

    public function edit(MealPlan $meal_plan)
    {
        return view('meal_plans.edit', ['mealPlan' => $meal_plan]);
    }

    public function update(Request $request, MealPlan $meal_plan)
    {
        $data = $request->validate([
            'code'        => 'required|string|max:10|unique:meal_plans,code,' . $meal_plan->meal_plan_id . ',meal_plan_id',
            'description' => 'nullable|string|max:255',
        ]);

        $meal_plan->update($data);

        return redirect()->route('meal-plans.index')->with('success', 'Meal plan updated.');
    }

    public function destroy(MealPlan $meal_plan)
    {
        $meal_plan->delete();
        return redirect()->route('meal-plans.index')->with('success', 'Meal plan deleted.');
    }
}
