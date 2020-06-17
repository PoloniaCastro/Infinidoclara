<!-- Esto trae el header y el footer -->
@extends('layouts.layout')

<!-- en header y footer esta la seccion content, que hace que aparezca esto -->
@section('content')

        <header class="masthead  text-center">
            <div class="container d-flex align-items-center flex-column">
                
                <h1 class="masthead-heading mb-0">Infinidoc</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                 
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="pre-wrap masthead-subheading font-weight-light mb-0">Hacer documentos nunca fue tan fácil</p>
            </div>
        </header>
        
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-white">Mas texto</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-6 ml-auto text-center">
                        <p class="pre-wrap lead">PaJa Molida</p>
                    </div>
                    <div class="col-lg-6 mr-auto text-center">
                        <p class="pre-wrap lead">Más paja molida</p>
                    </div>
                </div>
            </div>

@endsection