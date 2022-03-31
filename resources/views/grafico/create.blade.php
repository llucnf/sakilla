@extends('dashboard')
@section('content')


<form action="{{url('/grafico')}}" method="post" enctype="multipart/form-data" id="registro">
    @csrf
    <h3 class="text-green-600 text-lg ">Peliculas mas vendidas entre dos fechas</h3>
    <div class="grid grid-cols-2 gap-4 ">
        <div class="mb-3 col-6 ">
            <label for="inicio" class="form-label amarillo ">Mes de inicio</label>

            <select class="menu rounded" name="mes_inicio">
                <option value="1">ENERO</option>
                <option value="2">FEBRERO</option>
                <option value="3">MARZO</option>
                <option value="4">ABRIL</option>
                <option value="5">MAYO</option>
                <option value="6">JUNIO</option>
                <option value="7">JULIO</option>
                <option value="8">AGOSTO</option>
                <option value="9">SEPTIEMBRE</option>
                <option value="10">OCTUBRE</option>
                <option value="11">NOVIEMBRE</option>
                <option value="12">DICIEMBRE</option>
            </select>


        </div>
        <div class="mb-3 col-6">
            <label for="final" class="form-label amarillo">Mes final</label>

            <select class="rounded"  name="mes_final">

                <option value="1">ENERO</option>
                <option value="2">FEBRERO</option>
                <option value="3">MARZO</option>
                <option value="4">ABRIL</option>
                <option value="5">MAYO</option>
                <option value="6">JUNIO</option>
                <option value="7">JULIO</option>
                <option value="8">AGOSTO</option>
                <option value="9">SEPTIEMBRE</option>
                <option value="10">OCTUBRE</option>
                <option value="11">NOVIEMBRE</option>
                <option value="12">DICIEMBRE</option>
            </select>


        </div>

    </div>




    <button
        class="bg-transparent  text-blue-700 font-semibold  py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Crear
    </button>
</form>

@endsection


   

