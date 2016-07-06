<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class RecetasController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view ('site.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        /*se valida que el usuario no tenga receta registrada*/
        $tieneReceta = DB::select('SELECT recetas.id AS r FROM users, recetas WHERE recetas.user_id='. Auth::user()->id);

        if(empty($tieneReceta)){
            return view('recetas.create');
        }
        return redirect ('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		/*request validation*/
        $this->validate($request, [
            //'image' => 'mimes:jpg, jpeg, png',
            'receta' => 'required',
            'modalidad' => 'required',
            'ingredientes' => 'required',
            'preparacion' => 'required',
            'raciones' => 'required|numeric',

        ]);

        $nombreArchivo = null;

        if($request->hasFile('image')) {
            /*image upload*/
            $archivo = $request->file('image');
            $rutaDestino = 'img/recetas';
            $extension = $archivo->getClientOriginalExtension();
            $nombreOriginal = $archivo->getClientOriginalName();
            $nombreArchivo = date('Y-m-d-h-i-s') . "." . sha1($nombreOriginal) . "." . $extension;
            $archivo->move($rutaDestino, $nombreArchivo);
        }
        
        $receta = new Receta;

		/*request attrib*/
        $receta->receta = $request->receta;
        $receta->modalidad = $request->modalidad;
        $receta->ingredientes = $request->ingredientes;
        $receta->preparacion = $request->preparacion;
        $receta->raciones =  $request->raciones;
        $receta->imagen = $nombreArchivo;
		$receta->alergenicos = $request->huevo.", ".$request->pescado.", ".$request->leche.", ".$request->mani;
        $receta->user_id = Auth::user()->id;






        /*store in DB*/
        $receta->save();
/*
        if($request->huevo){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 1]);
        }
        if($request->pescado){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 2]);
        }
        if($request->leche){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 3]);
        }
        if($request->mani){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 4]);
        }
        if($request->mariscos){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 5]);
        }
        if($request->soya){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 6]);
        }
        if($request->nueces){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 7]);
        }
        if($request->trigo){
            DB::insert('insert into rec_ale (receta_id, alergenico_id) values (?, ?)', [$receta->id, 8]);
        }
        if($request->gluten){
            DB::insert('insert into rec_int (receta_id, intolerancia_id) values (?, ?)', [$receta->id, 1]);
        }
        if($request->lactosa){
            DB::insert('insert into rec_int (receta_id, intolerancia_id) values (?, ?)', [$receta->id, 2]);
        }
        if($request->levadura){
            DB::insert('insert into rec_int (receta_id, intolerancia_id) values (?, ?)', [$receta->id, 3]);
        }
*/
        return redirect('recetas');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$receta = Receta::findOrFail($id);
        if(Auth::user()->id == $receta->user_id) {
            return view('recetas/receta', compact('receta'));
        }
        return redirect('/');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$receta = Receta::findOrFail($id);

        if($receta->user_id==Auth::user()->id){
		    return view ('recetas/edit', compact('receta'));
        }
        
        return redirect('/');
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return Response
     */
	public function update(Request $request, $id)
	{
        $receta = Receta::findOrFail($id);

        if($receta->user_id==Auth::user()->id){
            $receta->update($request->all());
			return redirect('/recetas/'.$id);
        }
        
        return redirect('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
