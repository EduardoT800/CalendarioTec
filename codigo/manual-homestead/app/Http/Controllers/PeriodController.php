<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periods = Period::all();
        return $periods->toJson();
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

      if($request->has('period')){
        $newPeriod = new Period;
        $status = 'Correcto';
        $code = 200;
        $text = json_encode($request->period);
        $period = json_decode($text);
        $newPeriod->name = $period->name;
        // $newPeriod->jsonContent = $period;
        $newPeriod->jsonText = json_encode($period);
        if(!$newPeriod->save()){
          $code = 444;
          $status = 'Incorrecto';          
          $data = 'No se pudo guardar el modelo a la BD';
        } else {
          $data = 'Correctamente guardado';
        }
      } else {
        $status = 'Incorrecto';
        $code = 404;
        $data = 'No se encontro el periodo en el Request';
      }

      return response()->json([
        'status' => $status,
        'message' => $data,
        'code' => $code
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
