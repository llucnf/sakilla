@extends('dashboard')
@section('content')
    
<form action="{{url('/film')}}" method="post" enctype="multipart/form-data" id="registro">
    @csrf
    <h3 class="text-green-600 text-lg ">Creacion de pelicula</h3>
    <div class="grid grid-cols-2 gap-4">
        




    <button
        class="bg-transparent box-content h-32 w-32 text-blue-700 font-semibold  py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Crear
    </button>
</form>


@endsection
@yield('grafica')