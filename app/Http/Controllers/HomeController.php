<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

      public function animales(Request $request)
    {
                $mascota=DB::table('mascota')->get();
                $dese=DB::table('desempeno')->get();

         return [
            'mascota'=>$mascota,
            'dese'=>$dese
                ];
    }

     public function borrar(Request $request)
    {
            $borrar = $request->borrar;
            DB::table('mascota')->where('id', '=', $borrar)->delete();
            $mascota=DB::table('mascota')->get();

            return [
            'mascota'=>$mascota,
                ];
    }

        public function borrar2(Request $request)
    {
            $borrar = $request->borrar;
            DB::table('desempeno')->where('idD', '=', $borrar)->delete();
           $dese=DB::table('desempeno')->get();
            return [
            'dese'=>$dese
                ];

    }
    
     public function nuevo(Request $request)
    {
            $nuevos = $request->nuevos;
            $mascotas = $request->mascotas;

    DB::table('mascota')->insert(['nombre' => $mascotas, 'fecha' => $nuevos]
);
            
    }


        public function nuevode(Request $request)
    {
            $nuevos = $request->nuevos;
            $mascotas = $request->mascotas;
            $dese = $request->dese;

for ($i = 0; $i < count($request->dese); $i++) {
     DB::table('desempeno')->insert(['nombreD' => $mascotas, 'fechaF' => $nuevos,'idM'=> $dese[$i]]);
    }

    $fb = DB::table('desempeno')
                ->where('nombreD', 'like', $mascotas)->
                distinct('idD')->first();

     $idD=$fb->idD;
    for ($i = 0; $i < count($request->dese); $i++) 
    {
     DB::table('categoria')->insert(['idD' =>  $idD,'idM'=> $dese[$i]]);
    }

    }

        public function actualiza(Request $request)
    {
            $nuevos = $request->nuevos;
            $mascotas = $request->mascotas;
$idM=$request->idM; 

DB::table('mascota')
            ->where('id', $idM)
            ->update(['nombre' => $mascotas, 'fecha' => $nuevos]);
    }

    public function actualiza2(Request $request)
    {
            $nuevos = $request->nuevos;
            $mascotas = $request->mascotas;
            $idM=$request->idM; 
            $dese = $request->dese;

    for ($i = 0; $i < count($request->dese); $i++) {
     DB::table('desempeno')->where('idD', $idM)->update(['nombreD' => $mascotas, 'fechaF' => $nuevos,'idM'=> $dese[$i]]);
    }


    }


}
