@extends('layout.main')

@section('content')
    <h1 class="text-center m-5">Detalle del producto</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="img/producto1.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
                <h1>Nombre del producto</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in mauris condimentum, feugiat tortor ornare, fringilla sem. Sed eleifend congue lacus eu rutrum. Sed aliquet vehicula tellus et facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis placerat, ex pellentesque gravida mattis, arcu nisl suscipit sapien, euismod congue orci nibh et massa. Curabitur iaculis blandit fermentum. Sed convallis vel purus et luctus. Donec ullamcorper ex sed venenatis ornare. </p>
                <h3>$1000000</h3>
                <button type="button" class="btn my-background">Añadir a carrito</button>
            </div>
        </div>
    </div>

@endsection
