@extends('layouts.front')
@section('title')
    Respuesta
@endsection
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
                <h4 class="text-center">Gracias :    {{ $nombre}}</h4>
                <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum labore itaque alias, tenetur, molestiae eum facere vel accusamus porro quos quia mollitia. Magnam, molestias expedita?</h6>
            </div>
           

        </div>
    </div>
</div>
    
@endsection