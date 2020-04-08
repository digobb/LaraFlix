<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtoresController extends Controller
{
    
	public function index() {
		$atores = Ator::All();
		return view('atores.index', ['atores'=>$atores]);
	}

	public function create() {
		return view('atores.create');
	}

}

