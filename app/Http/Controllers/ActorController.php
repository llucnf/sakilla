<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use App\Models\Film;
use App\Models\FilmActor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $allActors=Actor::all();
    //     foreach ($allActors as $actor) {
    //         $films=$actor->films()->get();
    //     }
        
    //      dd($films);
    //    $arr_films=Film::find();
       
    //     dd($allActors);
    //     return view('actor.index')->with('actor',$allActors)
    //     ->with('films',$films);

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
    
 
        

    return view('actor.index')->with('array_meses',$array_meses);

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
