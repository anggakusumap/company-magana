<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = OurTeam::latest('id')->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        // Insert to Database
        // Closure-based transaction

        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
                $validated['avatar'] = $avatarPath;
            }

            OurPrinciple::create($validated);
        });

        return redirect()->route('admin.teams.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurTeam $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurTeam $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurTeam $team)
    {
        DB::transaction(function () use ($team) {
            $team->delete();
        });

        return redirect()->route('admin.teams.index');
    }
}
