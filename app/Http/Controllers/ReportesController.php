<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ReportesController extends Controller {

    public function recetasEstProPostre()
    {
        /*Usuarios en categoría Estudiante/Profesional y recetas de tipo postre*/
        $est_pro_postre = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"
                                    AND recetas.modalidad="postre"');
        
        return view ('reportes/recetasEstProPostre', compact('est_pro_postre'));
    }

    public function recetasEstProSalado()
    {
        /*Usuarios en categoría Estudiante/Profesional y recetas de tipo postre*/
        $est_pro_salado = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"
                                    AND recetas.modalidad="salado"');

        return view('reportes/recetasEstProSalado', compact('est_pro_salado'));
    }

    public function recetasAfiPubPostre()
    {
        /*Usuarios en categoría Aficionados/Público general y recetas de tipo postre*/
        $afi_pub_postre = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Aficionado/Público General"
                                    AND recetas.modalidad="postre"');
        
        return view ('reportes/recetasAfiPubPostre', compact('afi_pub_postre'));
    }

    public function recetasAfiPubSalado()
    {
        /*Usuarios en categoría Aficionados/Público general y recetas de tipo salado*/
        $afi_pub_salado = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Aficionado/Público General"
                                    AND recetas.modalidad="salado"');
        
        return view ('reportes/recetasAfiPubSalado', compact('afi_pub_salado'));
    }

    public function totalUsuariosEstProPostre()
    {
        $t_usuarios = DB::select('SELECT recetas.modalidad, COUNT(users.id)
                                  FROM users, recetas
                                  WHERE recetas.modalidad="postre"
                                  AND users.categoria="Estudiante/Profesional"
                                  AND users.id=recetas.user_id                                   
                                  GROUP BY recetas.modalidad');
    }

    public function totalUsuariosEstProSalado()
    {
        $t_usuarios = DB::select('SELECT recetas.modalidad, COUNT(users.id)
                                  FROM users, recetas
                                  WHERE recetas.modalidad="salado"
                                  AND users.categoria="Estudiante/Profesional"
                                  AND users.id=recetas.user_id 
                                  GROUP BY recetas.modalidad');
        
    }

    public function totalUsuariosAfiPubPostre()
    {
        $t_usuarios = DB::select('SELECT recetas.modalidad, COUNT(users.id)
                                  FROM users, recetas
                                  WHERE recetas.modalidad="postre"
                                  AND users.categoria="Aficionado/Publico general"
                                  AND users.id=recetas.user_id 
                                  GROUP BY recetas.modalidad');
    }

    public function totalUsuariosAfiPubSalado()
    {
        $t_usuarios = DB::select('SELECT recetas.modalidad, COUNT(users.id)
                                  FROM users, recetas
                                  WHERE recetas.modalidad="salado"
                                  AND users.categoria="Aficionado/Publico general"
                                  AND users.id=recetas.user_id 
                                  GROUP BY recetas.modalidad');
    }

    public function totalFilipinasEstProPostre()
    {
        $t_filipinas = DB::select('SELECT users.talla , COUNT (users.talla) AS total
                            FROM users, recetas
                            WHERE users.categoria = "Estudiante/Profesional"
                            AND recetas.modalidad="postre"
                            AND users.id = recetas.user_id 
                            GROUP BY users.talla');
    }

    public function totalFilipinasEstProSalado()
    {
        $t_filipinas = DB::select('SELECT users.talla , COUNT (users.talla) AS total
                            FROM users, recetas
                            WHERE users.categoria = "Estudiante/Profesional"
                            AND recetas.modalidad="salado"
                            AND users.id = recetas.user_id 
                            GROUP BY users.talla');
    }

    public function totalFilipinasAfiPubPostre()
    {
        $t_filipinas = DB::select('SELECT users.talla , COUNT(users.talla) AS total
                            FROM users, recetas
                            WHERE users.categoria = "Aficionado/Publico general"
                            AND recetas.modalidad="postre"
                            AND users.id = recetas.user_id 
                            GROUP BY users.talla');
    }

    public function totalFilipinasAfiPubSalado()
    {
        $t_filipinas = DB::select('SELECT users.talla , COUNT(users.talla) AS total
                            FROM users, recetas
                            WHERE users.categoria = "Aficionado/Publico general"
                            AND recetas.modalidad="salado"
                            AND users.id = recetas.user_id 
                            GROUP BY users.talla');
    }

    public function totalUsuarios()
    {
        $t_usuarios = DB::select('SELECT COUNT(id) AS total FROM users');
    }

    public function totalRecetas()
    {
        $t_recetas = DB::select('SELECT COUNT(id) AS total FROM recetas');
    }

    public function totales()
    {
        /*Usuarios en categoría Estudiante/Profesional y recetas de tipo postre*/
        $est_pro_postre = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"
                                    AND recetas.modalidad="postre"');

        /*Usuarios en categoría Estudiante/Profesional y recetas de tipo postre*/
        $est_pro_salado = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"
                                    AND recetas.modalidad="salado"');

        /*Usuarios en categoría Aficionados/Público general y recetas de tipo postre*/
        $afi_pub_postre = DB::select('SELECT users.*, recetas.* 
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Aficionado/Público General"
                                    AND recetas.modalidad="postre"');
        
    }
}
