<!-- // Create file resources/views/page.blade.php -->

@php
    use Prismic\Dom\RichText;
@endphp

@extends('layouts.app')

@section('content')

    <div data-wio-id="{{ $document->id }}">


        <h1>{{ RichText::asText($document->data->title) }}</h1>
        <div>
           {!! RichText::asHtml($document->data->paragraph) !!}
        </div>
        <img src="{{ $document->data->image->url }}" alt="{{ $document->data->image->alt }}">
    </div>

@stop