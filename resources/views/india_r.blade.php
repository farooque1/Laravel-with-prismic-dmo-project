<!-- // Create file resources/views/page.blade.php -->

@php
    use Prismic\Dom\RichText;
@endphp

@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col mb-5">
            <h1> Новости и обновления</h1>

            <h5 class="mt-5"><a href="{{ Request::root() }}/covid-19/covid">Important notice due to Covid-19 pandemics</a> </h5>
            <p class="mt-3">Published on 22/3/2020</p>
            <button type="button" class="btn btn-outline-secondary mt-2">More News <i style="font-size:17px" class="fa">&#xf105;</i></button>
        </div>

        <div class="col mb-5">
            <h1>Типы виз</h1>
             <ul class="mt-4 mb-5">
    			<a href="">Частная виза</a><br>
    			<a href="">Учебная виза</a><br>
    			<a href="">Туристическая виза</a><br>
    			<a href="">Рабочая виза</a><br>
    			<a href="">Гуманитарная виза</a><br>
    			<a href="">Транзитная виза</a><br>
    			<a href="">Деловая виза</a><br>
    			<a href="">Безвизовый режим</a><br>
    			<a href="">Владельцы дипломатических и служебных паспортов</a>
   			</ul>
        </div>        
    </div>

</div>
<div class="container mt-5">
    <div data-wio-id="{{ $document->id }}">
        <h1>{{ RichText::asText($document->data->title) }}</h1><br>
        <div>
           <h5>{!! RichText::asHtml($document->data->paragraph) !!}</h5><br>
        </div>
              <span>{!! RichText::asHtml($document->data->title2) !!}</span>
     </div>
</div>
@stop