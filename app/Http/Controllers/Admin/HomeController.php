<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
public function   construct()
{
$this->middleware('auth:admin');
}

public function index()
{
$user = Auth::user();
return view('home', compact('user'));
}
}
