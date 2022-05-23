<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\UI;
use App\Http\Requests\StoreUIRequest;
use App\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Render the main dashboard
     */
    public function dashboard()
    {
        return Inertia::render('UI/windows/Dashboard');
    }


    /**
     * Render the main profile
     */
    public function profile()
    {
        return Inertia::render('UI/windows/Profile');
    }


    /**
     * Render the main finance
     */
    public function fileManager()
    {
        return Inertia::render('UI/windows/File-Manager');
    }


    /**
     * Render the main finance
     */
    public function gallery()
    {
        return Inertia::render('UI/windows/Gallery');
    }


    /**
     * Render the main finance
     */
    public function settings()
    {
        return Inertia::render('UI/windows/Settings');
    }


    public function login()
    {
        return Inertia::render('Auth/Login');
    }


}
