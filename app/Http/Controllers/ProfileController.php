<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\HTTP\Response;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $org = Organization::where("id", $user->organization_id)
        ->get()->first();
        if(!$org){
            return response('Bad Request', 400);
            $org = "";
        }

        return view('profile.index', compact("user", "org"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->has(['org_name', 'phone'])) {
            $user = Auth::user();
            $newPhone = $request['phone'];
            $newName = $request['org_name'];
    
            $profile = User::where('id', $user->id)->first();
            $profile->phone = $newPhone;
            $profile->save();
            $org_id = $profile->organization_id;
            $org = Organization::where('id', $org_id)->first();
            $org->name = $newName;
            $org->save();
            return response()->json([
                'status' => "ok",
            ], Response::HTTP_OK);
        } else {
            return response('Bad Request', 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
