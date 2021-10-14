<?php

namespace App\Http\Controllers;

use App\Models\cotizaciones;
use Illuminate\Http\Request;
use App\Models\User;
//use App\Traits\Verifytoken;
use App\Models\carmados;

class CotizacionesController extends Controller
{
  //  use Verifytoken;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request;

        $data=[];
       // $data[]
 //return $this->verifica("3RRZ4Czrz9KDMMG5Xo3IzaCU5WV7ZluKDYhNiw9lNZvUdRgFDnNUePyByJF8LVgIXPEE5gzJgQrzqa5RFaPu69oK893wNFWpY6xEoVLtzmNH3seFecjKBCHrjJXkTFo0DjDrR13NKF1R4uTxhxDnSw");

//  $user= User::where('email', '=', $request->email)->first();
// if($user){
//     $data['user']['nombre']=$user->nom;
//     $data['user']['email']=$user->email_registro;
//     $data['user']['tel_fijo']=$user->tel_fij;
//     $data['user']['movil']=$user->tel_mov;
//     $data['cotizaciones']=[];

// $cot=cotizaciones::where('user_id',$user->id)->whereDate('created_at',">", '2021-06-31')->get();  ////todas las cotizaciones
// for($a=0;$a<count($cot);$a++){
// $item=[];
// $item['Total']=$cot[$a]['tot'];
// $item['Serie']=$cot[$a]['serie'];
// $item['Arcones_Totales']=$cot[$a]['tot_arm'];
// $item['Fecha']=$cot[$a]['created_at'];
// $item['Arcones']=[];
// $armados=carmados::where('cotizacion_id',$cot[$a]->id)->get();
// for($b=0;$b<count($armados);$b++){
// $arm=[];
// $arm['Sku']=$armados[$b]['sku'];
// $arm['Nombre']=$armados[$b]['nom'];
// $arm['Gama']=$armados[$b]['gama'];
// $arm['Cantidad']=$armados[$b]['cant'];
// $arm['Precio_Unitario_Sin_Iva']=$armados[$b]['prec_redond'];
// $arm['Total']=$armados[$b]['tot'];
// $arm['Tipo']=$armados[$b]['tip'];
// array_push($item['Arcones'],$arm);

// }



// array_push($data['cotizaciones'],$item);
// }


// return response()->json(['data'=>$data,"message"=>"success","code"=>200]);

// }else{

//     return response()->json(['data'=>[],"message"=>"usuario no encontrado","code"=>404]);
// }


}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cotizaciones  $cotizaciones
     * @return \Illuminate\Http\Response
     */
    public function show(cotizaciones $cotizaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cotizaciones  $cotizaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(cotizaciones $cotizaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cotizaciones  $cotizaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cotizaciones $cotizaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cotizaciones  $cotizaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(cotizaciones $cotizaciones)
    {
        //
    }
}
