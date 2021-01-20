@extends('_layouts.master')

@section('title', 'index')


@section('body')

{{-- jumbotrone immaginona --}}
<section class="hero">
    <div class="jumbo grid grid-cols-6 lg:grid-cols-12">
        <div class="col-start-2 lg:col-start-8 col-span-4 lg:col-span-5">
            <div class="text text-center lg:text-left flex flex-col justify-center items-center lg:items-start">
                <h1>Eleganza, semplicità
                    <span>e stile senza tempo.</span>
                </h1>
                <p>Scegli l'abito più bello, su misura per te.</p>
                <div class="buttons flex flex-col items-center lg:flex-row lg:justify-between">
                    <a href="#">Appuntamenti</a>
                    <a class="lg:ml-5"href="#">Vedi le creazioni</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- sezione immagine + testo --}}
<section class="section-heading flex justify-center items-center">
    <div class="wrap grid grid-cols-12">
        <div class="col-start-2 col-span-10 lg:col-start-2 lg:col-span-4">
            <div class="img-wrap flex justify-center lg:justify-end items-center">
                <img src="/assets/images/modello.jpg" alt="spezzato marrone con pochette">
            </div>
        </div>
        <div class="col-start-2 col-span-10 lg:col-start-7 lg:col-span-4">
            <div class="testo-wrap flex flex-col text-center lg:text-left lg:justify-start lg:items-start">
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
                <p class="">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="list-item">
    <div class="wrap grid lg:grid-cols-12 text-center">
        <div class="box lg:col-start-3 lg:col-end-5">
            <i class="fas fa-2x fa-user-tie"></i>
            <h3 class="mt-5">List Item</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="box lg:col-start-6 lg:col-end-8">
            <i class="fas fa-2x fa-user-tie"></i>
            <h3 class="mt-5">List Item</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="box lg:col-start-9 lg:col-end-11">
            <i class="fas fa-2x fa-user-tie"></i>
            <h3 class="mt-5">List Item</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="box lg:col-start-3 lg:col-end-5 box2">
            <i class="fas fa-2x fa-user-tie"></i>
            <h3 class="mt-5">List Item</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="box lg:col-start-6 lg:col-end-8 box2">
            <i class="fas fa-2x fa-user-tie"></i>
            <h3 class="mt-5">List Item</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class="box lg:col-start-9 lg:col-end-11 box2">
            <i class="fas fa-2x fa-user-tie"></i>
            <h3 class="mt-5">List Item</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
</section>
@endsection
