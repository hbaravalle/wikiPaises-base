@extends('layouts.mainLayout')
@section('content')
<main>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Crear país</h2>
        </div>
        
        <div class="row">
            <div class="col-md-8 offset-md-2 order-md-1">
                <form method="post" action="/pais/agregar" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mb-3">
                        <label for="__input-nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="__input-nombre" placeholder="Ej.: Holanda">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="__input-poblacion">Población</label>
                        <input type="text" name="poblacion" class="form-control" id="__input-poblacion" placeholder="Ej.: 200000">
                    </div>
                    
                    <div class="form-group">
                        <label for="__input-continente">Continente</label>
                        <select class="form-control" name="continente" id="__input-continente">
                            <option value="">Elegir un continente...</option>
                            <option value="1">Europa</option>
                            <option value="2">África</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="__input-bandera">Cargar imagen</label>
                        <input type="file" name="bandera" class="form-control-file" id="__input-bandera">
                    </div>              
                    
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Crear país</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection