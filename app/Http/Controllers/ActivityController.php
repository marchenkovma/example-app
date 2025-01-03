<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        return Activity::all();
    }

    public function store(ActivityRequest $request)
    {
        return Activity::create($request->validated());
    }

    public function show(Activity $activity)
    {
        return $activity;
    }

    public function update(ActivityRequest $request, Activity $activity)
    {
        $activity->update($request->validated());

        return $activity;
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return response()->json();
    }
}
