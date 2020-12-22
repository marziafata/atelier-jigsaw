@extends('_layouts.master')

@section('title', 'index')


@section('body')

{{-- jumbotrone immaginona --}}
<section class="hero">
    <div class="jumbo grid grid-cols-12">
        <div class="col-start-8 col-span-3">
            <div class="text flex flex-col justify-center pl-5">
                <h1>Eleganza, semplicità
                    <span>e stile senza tempo.</span>
                </h1>
                <p>Scegli l'abito più bello, su misura per te.</p>
                <div class="buttons flex">
                    <a href="#">Appuntamenti</a>
                    <a class="ml-5"href="#">Vedi le creazioni</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- sezione immagine + testo --}}
<section class="section-heading flex justify-center items-center">
    <div class="wrap grid grid-cols-12">
        <div class="col-start-3 col-span-4">
            <div class="img-wrap flex justify-end items-center">
                <img src="/assets/images/modello.jpg" alt="spezzato marrone con pochette">
            </div>
        </div>
        <div class="col-span-4">
            <div class="testo-wrap flex flex-col justify-center items-start">
                <h2>Section Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>
                    Learn more
                    <span>
                        <a href="#">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- grid section titolo --}}
<section class="grid-section">
    <div class="wrap grid grid-cols-12">
        <div class="col-span-12 text-center">
            <div class="wrap-testo flex flex-col justify-end">
                <h2>
                    Grid section
                </h2>
                <p class="mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="list-item">
<div class="wrap grid grid-cols-3 gap-4 text-center">
    <div class="box">
        <i class="fas fa-2x fa-user-tie"></i>
        <h3 class="mt-2">Titolo</h3>
        <p class="mt-2">Descrizione</p>
    </div>
    <div class="box ">
        <i class="fas fa-2x fa-user-tie"></i>
        <h3 class="mt-2">Titolo</h3>
        <p class="mt-2">Descrizione</p>
    </div>
    <div class="box ">
        <i class="fas fa-2x fa-user-tie"></i>
        <h3 class="mt-2">Titolo</h3>
        <p class="mt-2">Descrizione</p>
    </div>
    <div class="box box2">
        <i class="fas fa-2x fa-user-tie"></i>
        <h3 class="mt-2">Titolo</h3>
        <p class="mt-2">Descrizione</p>
    </div>
    <div class="box box2">
        <i class="fas fa-2x fa-user-tie"></i>
        <h3 class="mt-2">Titolo</h3>
        <p class="mt-2">Descrizione</p>
    </div>
    <div class="box box2">
        <i class="fas fa-2x fa-user-tie"></i>
        <h3 class="mt-2">Titolo</h3>
        <p class="mt-2">Descrizione</p>
</div>
</section>
@endsection
