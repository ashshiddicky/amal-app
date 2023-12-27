<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MasterController extends Controller
{
    public function index(): View{
    $users = \App\Models\User::all();
    return view('master.index', ['users' => $users]);
    }

}
