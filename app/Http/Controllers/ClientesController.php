<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;

use App\Clientes;

class ClientesController extends Controller
{
    public function index()
	{
		return view("clientes.index")->withItems(Clientes::all());
	}

	public function create()
	{
		return view("clientes.create");
	}
}
