<?php

namespace App\Http\Controllers;

use App\Models\tb_artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = tb_artikel::where('status_publish', 'publish')->orderBy('id', 'desc')->paginate(5);
        return view('home', compact('data'));
    }
    

    public function show(String $id)
    {
        $data = tb_artikel::with('user')->findOrFail($id);        
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
}
