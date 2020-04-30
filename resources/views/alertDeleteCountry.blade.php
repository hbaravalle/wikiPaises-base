@extends('layouts.mainLayout')
@section('content')
<main>
    <section id="__seccion-listado-banderas">
        <div class="container">
            <div class="row">
                
                <div class="col-6 offset-3">
                    <img src="/img/default.png" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Un pais ejemplo</h4>
                        <ul>
                            <li><strong>Población:</strong> 123456</li>
                            <li><strong>Region:</strong> Ad lorem ipsum</li>
                        </ul>
                    </div>
                    <form class="text-center" method="post" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h5>¿Estás seguro de borrar este pais?</h5>
                        <input type="hidden" name="id" value="{{ $unPais->id }}">        
                        <button class="btn btn-danger btn-lg btn-block" type="submit">Eliminar pais</button>
                    </form>
                </div>          
                
            </div>
        </div>
    </section>
</main>
@endsection