<!-- // Create file resources/views/page.blade.php -->

@php
    use Prismic\Dom\RichText;
@endphp

        <div class="container-fluid mt-4" style="width:1280px; ">
                <nav class="navbar navbar-expand-sm navbar-light ">
                        <a class="" href="#"><img src="https://images.prismic.io/visa/8a227360-6915-4027-98ae-7f32f35aae3f_logo_russia_visa_centre.svg" style="width: 11.136rem;height: 4rem;; "></a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">Visa types <i style="font-size:17px;color:red; " class="fa">&#xf107;</i></a></li>
                <li class="nav-item active"><a class="nav-link" href="#">General information <i style="font-size:17px;color:red;" class="fa">&#xf107;</i></a></li>
                <li class="nav-item active"><a class="nav-link" href="#" >Additional service</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">News and updates</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Services <i style="font-size:17px;color:red;" class="fa">&#xf107;</i></a></li>
                <li class="nav-item active"><a class="nav-link" href="#">FAQ'S</a></li>
                
                <li class="nav-item active"><a class="nav-link" href="#"><img src="https://images.prismic.io/visa/421402f5-990b-4334-b3b9-62bfcedfc643_plane.png" style="margin-left:10em;width:1.85rem;"></a></li>
                                </ul>
                <div class="dropdown">
                <a class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown">En <i style="font-size:17px;color:red;" class="fa">&#xf107;</i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:10px;">
                        <a class="dropdown-item" href="{{ Request::root() }}/india/demo">English</a>
                            <a class="dropdown-item" href="{{ Request::root() }}/india_r/demo2">Rs</a>
                                <a class="dropdown-item" href="#">Fr</a>
                            </div>
                        </div>
                            </form>
                        </div>
                    </nav>
                </div>
</head>
@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col mb-5">
            <h1> News and Updates</h1>

            <h5 class="mt-5"><a href="{{ Request::root() }}/covid-19/covid">Important notice due to Covid-19 pandemics</a> </h5>
            <p class="mt-3">Published on 22/3/2020</p>
            <button type="button" class="btn btn-outline-secondary mt-2">More News <i style="font-size:17px" class="fa">&#xf105;</i></button>
        </div>

        <div class="col mb-5">
            
            <h1>Which type of Visa are you searching for?</h1>
             <ul class="mt-4 mb-5">
    <a href="">Business Visa</a><br>
    <a href="">Private Visa</a><br>
    <a href="">Humanitarain Visa</a><br>
    <a href="">Work Visa</a><br>
    <a href="">Tourist Visa</a><br>
    <a href="">Student Visa</a><br>
    <a href="">Transit Visa</a>
   </ul>
        </div>        
    </div>

</div>
<div class="container mt-5">
<hr style="height:2px;border-width:0.0em;color:lightgray;background-color:lightgray">
    <div data-wio-id="{{ $document->id }}">


        <h2 class="mt-5 mb-5">{{ RichText::asText($document->data->title) }}</h2>
        <div>
           <h5>{!! RichText::asHtml($document->data->t_name) !!}</h5>
        </div>
        </div>
     </div>

@stop