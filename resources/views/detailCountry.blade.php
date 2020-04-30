@extends('layouts.mainLayout')
@section('content')
<main id="detailCountry">
    <div class="container">
        <a href="#" style="display:block; padding-bottom:10px"><strong>←</strong> Volver al listado</a>
        <div class="row d-flex align-items-center">
            <div class="col-8">
                <img class="country-flag" src="/img/default.png" alt="">
            </div>
            <div class="col-4">
                <div class="country-detail">
                    <h2>Un pais ejemplo</h2>
                    <ul>
                        <li><strong>Población:</strong> 123456</li>
                        <li><strong>Region:</strong> Ad lorem ipsum</li>
                    </ul>
                </div>
                <a href="" type="button" class="btn btn-primary btn-sm">Editar país</a>
                <a href="" type="button" class="btn btn-danger btn-sm">Eliminar país</a>
            </div>     
            
        </div>
    </div>
</main>
@endsection