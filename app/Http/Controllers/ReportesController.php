<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ReportesController extends Controller {

    /*Usuarios y recetas en categoría Aficionados/Público general y de tipo postre*/
    public function recetasAfiPubPostre()
    {

        $afi_pub_postre = DB::select('SELECT users.*, recetas.*, lugars.nombre as estado
                                    FROM users, recetas, lugars
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Aficionado/Público General"
                                    AND recetas.modalidad="postre"
                                    AND users.lugar_id = lugars.id');

        return view ('reportes/recetasAfiPubPostre', compact('afi_pub_postre'));
    }

    /*Usuarios y recetas en categoría Aficionados/Público general y de tipo salado*/
    public function recetasAfiPubSalado()
    {

        $afi_pub_salado = DB::select('SELECT users.*, recetas.*, lugars.nombre as estado
                                    FROM users, recetas, lugars
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Aficionado/Público General"
                                    AND recetas.modalidad="salado"
                                    AND users.lugar_id = lugars.id');

        return view ('reportes/recetasAfiPubSalado', compact('afi_pub_salado'));
    }

    /*Usuarios y recetas en categoría Estudiante/Profesional y de tipo postre*/
    public function recetasEstProPostre()
    {
        /*Usuarios en categoría Estudiante/Profesional y recetas de tipo postre*/
        $est_pro_postre = DB::select('SELECT users.*, recetas.*, lugars.nombre as estado
                                    FROM users, recetas, lugars
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"
                                    AND recetas.modalidad="postre"
                                    AND users.lugar_id = lugars.id');
        
        return view ('reportes/recetasEstProPostre', compact('est_pro_postre'));
    }

    /*Usuarios y recetas en categoría Estudiante/Profesional y de tipo salado*/
    public function recetasEstProSalado()
    {
        /*Usuarios en categoría Estudiante/Profesional y recetas de tipo postre*/
        $est_pro_salado = DB::select('SELECT users.*, recetas.*, lugars.nombre as estado
                                    FROM users, recetas, lugars
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"
                                    AND recetas.modalidad="salado"
                                    AND users.lugar_id = lugars.id');

        return view('reportes/recetasEstProSalado', compact('est_pro_salado'));
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
        /*Usuarios en categoría Aficionados/Público General*/
        $t_afi_pub = DB::select('SELECT COUNT(users.id)  AS t_afipub
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Aficionado/Público General"');

        /*Usuarios en categoría Estudiante/Profesional*/
        $t_est_pro = DB::select('SELECT COUNT(users.id)  AS t_estpro
                                    FROM users, recetas
                                    WHERE recetas.user_id = users.id
                                    AND users.categoria="Estudiante/Profesional"');

        /*Cantidad de usuarios por talla de filipina*/
        $t_usu_fil = DB::select('SELECT COUNT(users.id) AS usuarios, users.talla 
                                  FROM users 
                                  GROUP BY users.talla 
                                  ORDER BY usuarios DESC');
        
        

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




        return view('reportes/totales', compact('t_afi_pub', 't_est_pro', 't_usu_fil'));
    }

    public function listaReportes()
    {
        return view('reportes/listaReportes');
    }
}
