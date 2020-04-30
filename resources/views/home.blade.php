@extends('layouts.mainLayout')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="w-100 text-center mt-5">¡{{ Auth::user()->name }}, bienvenidx a WikiBanderas!</h2>
            </div>
        </div>
    </div>
</main>
@endsection
