<!-- // Create file resources/views/page.blade.php -->

@php
    use Prismic\Dom\RichText;
@endphp

@extends('layouts.app')

@section('content')


<div class="container mt-5">
<hr style="height:2px;border-width:0.0em;color:lightgray;background-color:lightgray">
    <div data-wio-id="{{ $document->id }}">


        <h2 class="mt-5 mb-5">{{ RichText::asText($document->data->title) }}</h2>
        <div>
        	 <h5>{!! RichText::asHtml($document->data->para2) !!}</h5>
        	 <br>
           <h5>{!! RichText::asHtml($document->data->para1) !!}</h5>
        </div>
        </div>
     </div>

@stop