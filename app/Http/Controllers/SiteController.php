<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteController extends Controller {

    public function index()
    {
        return view('site.index');
	}

    public function jurado()
	{
		return view('site.jurado');
	}

	public function ganadores()
	{
		return view('site.ganadores');
	}

	public function recetas()
	{
		return view('site.recetas');
	}

	public function capitulos()
	{
		return view('site.capitulos');
	}

	public function clasificados()
	{
		return view('site.clasificados');
	}

	public function testimoniales()
	{
		return view('site.testimoniales');
	}
}
