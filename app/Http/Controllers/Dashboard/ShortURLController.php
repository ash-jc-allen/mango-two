<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShortURLController extends Controller
{
    public function index(): View
    {
        return view('dashboard.urls.index');
    }
}
