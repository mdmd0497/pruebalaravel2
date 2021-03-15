<?php

namespace App\Http\Controllers;

use App\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Project;
use Route;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear-prestamo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //|digits_between:2,6
    public function store(Request $request)
    {

        $request->validate([
            'id_prestamo' => 'required',
            'casado' => 'required',
            'dependientes' => 'required',
            'educacion' => 'required',
            'independiente' => 'required',
            'i_d' => 'required|numeric|between:0,99999.99',
            'i_c' => 'required|numeric|between:0,99999.99',
            'c_p' => 'required|numeric|between:0,99999.99',
            'p_p' => 'required',
            'historia_credito' => 'required',
            'tipo_propiedad' => 'required'
        ]);

        $id_prestamo = $request->input('id_prestamo');
        $casado = $request->input('casado');
        $dependientes = $request->input('dependientes');
        $educacion = $request->input('educacion');
        $independiente = $request->input('independiente');
        $i_d = $request->input('i_d');
        $i_c= $request->input('i_c');
        $c_p = $request->input('c_p');
        $p_p = $request->input('p_p');
        $historia_credito = $request->input('historia_credito');
        $tipo_propiedad = $request->input('tipo_propiedad');

        Prestamo::create([
            'id_prestamo' => $id_prestamo,
            'casado' => $casado,
            'dependientes' => $dependientes,
            'educacion' => $educacion,
            'independiente' => $independiente,
            'i_d' => $i_d,
            'i_c' => $i_c,
            'c_p' => $c_p,
            'p_p' => $p_p,
            'historia_credito' => $historia_credito,
            'tipo_propiedad' => $tipo_propiedad
        ]);

      //return back()->with('status','registro satisfactorio');
      return redirect()->to('resultado/'.$id_prestamo)->with('status','registro satisfactorio');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aprobado = "";
       $prestamo = DB::table('prestamos')->where('id_prestamo','=',$id)->first();
//       dump($prestamo);
//       echo $prestamo->i_c.'\n';
//       echo $prestamo->i_c;


       if ($prestamo->historia_credito == 1){
           if ($prestamo->i_c > 0 && $prestamo->i_d/9 > $prestamo->c_p){

               $aprobado='aprobado';
           }else if ($prestamo->dependientes > 2 || $prestamo->dependientes == '+3' && $prestamo->independiente == 'Si'){
                if ($prestamo->i_c /12 > $prestamo->c_p){

                    $aprobado='aprobado';
                }elseif ($prestamo->c_p<200){

                    $aprobado='no aprobado';
                }
           }
       }else if($prestamo->historia_credito == 0){
            if ($prestamo->independiente == 1){
                if ($prestamo->casado == 'No' && $prestamo->dependientes == 1){
                    if ((($prestamo->i_d)/10) > $prestamo->c_p && (($prestamo->i_c)/10) > $prestamo->c_p){
                        if ($prestamo->c_p < 180){
                            echo 'aprobado';
                            $aprobado='aprobado';
                        }
                    }else{

                        $aprobado='no aprobado';
                    }
                }else{

                    $aprobado='no aprobado';
                }
            }elseif ($prestamo->independiente == 0){
                if ($prestamo->tipo_propiedad != 'Semi Urbana' && ($prestamo->dependientes != '+3' && intval($prestamo->dependientes) < 2)){
                    if ($prestamo->educacion == 'Graduado'){
                        if ($prestamo->i_d/11 > $prestamo->c_p && $prestamo->i_c/11 > $prestamo->c_p ){

                            $aprobado='aprobado';
                        }

                    }elseif ($prestamo->educacion == 'No graduado'){

                        $aprobado='no aprobado';
                    }
                }else{

                    $aprobado='no aprobado';
                }
            }
       }
     return view('resultado',['id_prestamo'=>$id])->with('aprobado',$aprobado);//quede acá

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
