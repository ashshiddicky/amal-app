<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class SantriController extends Controller
{
    public function index(): View
    {
        return view('santri.index');
    }
}
