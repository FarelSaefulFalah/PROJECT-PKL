<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\isAdmin;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        return view('profile.index');
    }
}
