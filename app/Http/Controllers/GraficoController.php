<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GraficoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta2=DB::select("select count(rental_date) as num from rental where month(rental_date)= 7 and year(rental_date)=2005 group by month(rental_date)");
    //si esta vacio imprime true
   // dd(empty($consulta2));
    $array_meses=[];
    // coloca en array_meses los valores del alquiler segun el mes y si su valor es cero 
    for ($i=1; $i <9 ; $i++) { 
        
        $consulta=DB::select("select count(rental_date) as num  from rental where month(rental_date)= ".$i." and year(rental_date)=2005 group by month(rental_date)");
        
        if (empty($consulta)) {
           $array_meses[$i-1]=0;
        }else{
            $array_meses[$i-1]=$consulta[0]->num;
        }
        
    }
    
 
     //dd($array_meses) ;  

    return view('grafico.index')->with('array_meses',$array_meses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('grafico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mes_inicio = request()->mes_inicio;
        $mes_final= request()->mes_final;
        //dd($request->all());
        $consulta=DB::select("select film.film_id,film.title, count(rental.return_date) as alquileres 
        from film 
        inner join inventory 
        on film.film_id= inventory.film_id 
        inner join rental 
        on inventory.inventory_id = rental.inventory_id 
        where month(rental.rental_date) between ".$mes_inicio."  and ".$mes_final."   group by film.film_id having alquileres>1 order by alquileres desc limit 10");
        $array_alquileres=[];
        $array_titulos=[];
        foreach ($consulta as $request ) {
           array_push($array_titulos,$request->title);
           array_push($array_alquileres,$request->alquileres);
        }
        $titulo="Peliculas top 10 alquiladas entre ".$mes_inicio." y ". $mes_final;
        //dd($array_alquileres);
        //dd($array_titulos);
        return view('grafico.new')->with('array_titulos',$array_titulos)->with('array_alquileres',$array_alquileres)->with('titulo',$titulo);
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
