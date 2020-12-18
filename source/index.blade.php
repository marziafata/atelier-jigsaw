@extends('_layouts.master')

@section('title', 'index')


@section('body')
<section class="hero grid grid-cols-12">
    <div class="col-start-8 col-span-3 flex justify-end items-center ">
        <div class="text">
            <h1>Big Hero Test</h1>
            <p>This is the best app for people with apps</p>
            <div class="buttons flex">
                <a href="#">Appuntamenti</a>
                <a href="#">Vedi i servizi</a>
            </div>
        </div>
    </div>
</section>
<section class="section-heading">
<div class="grid grid-cols-12">
    <div class="img col-start-4 col-span-3">
        immagine
    </div>
    <div class="testo col-span-3">
        testo
    </div>
</div>
</section>
<section class="grid-section">
<div class="grid grid-cols-12">
    <div class="col-span-12 text-center">
        <h2>
            Grid section
        </h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
    </div>
</div>
</section>
<section class="list-item">
<div class="grid grid-cols-12 text-center">
    <div class="box col-start-4 col-span-2">
        <i class="fas fa-user-tie"></i>
        <h3>Titolo</h3>
        <p>Descrizione</p>
    </div>
    <div class="box col-span-2">
        <i class="fas fa-user-tie"></i>
        <h3>Titolo</h3>
        <p>Descrizione</p>
    </div>
    <div class="box col-span-2">
        <i class="fas fa-user-tie"></i>
        <h3>Titolo</h3>
        <p>Descrizione</p>
    </div>
    <div class="box col-start-4 col-span-2">
        <i class="fas fa-user-tie"></i>
        <h3>Titolo</h3>
        <p>Descrizione</p>
    </div>
    <div class="box col-span-2">
        <i class="fas fa-user-tie"></i>
        <h3>Titolo</h3>
        <p>Descrizione</p>
    </div>
    <div class="box col-span-2">
        <i class="fas fa-user-tie"></i>
        <h3>Titolo</h3>
        <p>Descrizione</p>
</div>
</section>
@endsection
