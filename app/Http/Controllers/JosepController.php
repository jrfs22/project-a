<?php

namespace App\Http\Controllers;

use App\Models\JosepModel;
use Illuminate\Http\Request;

class JosepController extends Controller
{
    public function index()
    {
        $josep = JosepModel::all();
        return view('josep.index', compact('josep'));
    }
}
