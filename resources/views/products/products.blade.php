@extends('layout.main')

@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-jornadas-constitucional.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="img/slider-semana-ingenieria.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-semana-tecnologo-2023.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 class="text-center m-5">Productos</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/producto1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del producto</h5>
                        <p class="card-text">$1000000</p>
                        <a href="#" class="btn btn-primary my-background">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection