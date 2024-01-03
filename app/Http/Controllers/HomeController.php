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
        $data = DB::table('tb_artikels')->latest()->orderBy('id','desc')->paginate(4);

        return view('home', compact('data'));
    }

    public function ShowArticle($id)
    {
        $data = tb_artikel::findOrFail($id);
        
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
}
