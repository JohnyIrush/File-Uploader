<?php

namespace App\Http\Controllers\User;

use App\Models\UserManager;
use App\Http\Requests\StoreUserManagerRequest;
use App\Http\Requests\UpdateUserManagerRequest;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class UserManagerController extends Controller
{


    public function userManager()
    {
        return Inertia::render('UI/windows/User-Manager');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserManagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function show(UserManager $userManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function edit(UserManager $userManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserManagerRequest  $request
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserManagerRequest $request, UserManager $userManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserManager $userManager)
    {
        //
    }
}
