<?php

namespace App\Http\Controllers;

use App\Models\IndahModel;
use Illuminate\Http\Request;

class IndahController extends Controller
{
    public function index()
    {
        $indah = IndahModel::all();
        return view('indah.index', compact('indah'));
    }
}
