<!-- // Create file resources/views/page.blade.php -->

@php
    use Prismic\Dom\RichText;
@endphp

        <div class="container-fluid mt-4" style="width:100%;">
                <nav class="navbar navbar-expand-sm navbar-light ">
                        <a class="" href="#"><img src="https://images.prismic.io/visa/8a227360-6915-4027-98ae-7f32f35aae3f_logo_russia_visa_centre.svg" style="width: 11.136rem;height: 4rem;; "></a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">{{__('lang.Visa types')}} <i style="font-size:17px;color:red; " class="fa">&#xf107;</i></a></li>
                <li class="nav-item active"><a class="nav-link" href="#">{{__('lang.General information')}} <i style="font-size:17px;color:red;" class="fa">&#xf107;</i></a></li>
                <li class="nav-item active"><a class="nav-link" href="#" >{{__('lang.Additional service')}}</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">{{__('lang.News and updates')}} </a></li>
                <li class="nav-item active"><a class="nav-link" href="#">{{__('lang.Services')}} <i style="font-size:17px;color:red;" class="fa">&#xf107;</i></a></li>
                <li class="nav-item active"><a class="nav-link" href="#">{{__("lang.FAQ'S")}}</a></li>
                
                <li class="nav-item active"><a class="nav-link" href="#"><img src="https://images.prismic.io/visa/421402f5-990b-4334-b3b9-62bfcedfc643_plane.png" style="margin-left:10em;width:1.85rem;"></a></li>
                                </ul>
                <div class="dropdown">
                <a class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown">En <i style="font-size:17px;color:red;" class="fa">&#xf107;</i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:10px;">
                        <a class="dropdown-item" href="{{ Request::root() }}/aus/aus">En</a>
                            <a class="dropdown-item" href="{{ Request::root() }}/aus_r/aus_r">Rs</a>
                                <a class="dropdown-item" href="lang/ru">Fr</a>
                            </div>
                        </div>
                            </form>
                        </div>
                    </nav>
                </div>
</head>
@extends('layouts.app')

@section('content')

<div id="background">
        <div class="container mb-5">
            <img src="https://images.prismic.io/artionis-ru/e0e744bd-2ba2-4ef5-afa6-f4cef4a1f04c_russia.jpg" style="width:69rem;height:400px;object-fit:cover;">
                <span style="position: absolute;top:55%;-webkit-transform:translateY(-50%);transform:translateY(-50%);left: 10%;font-size:40px;text-align:center;width: 80%;font-family: GTSectraDisplay,serif;z-index:2;color:#fff;font-weight:100;display: inline-block;line-height: 5rem;"><p>{{__('lang.Discover how easy it is to get a Russian Visa')}}</p></span>
                    <div style="border-left:1px solid rgb(255,0,0);margin-top:10px; 
                        height:11em;margin-left:35em;position:absolute;top:81%;-webkit-transform: translateY(-50%);transform: translateY(-50%);">
                                        
                 </div>
          </div>
    </div>

<style type="text/css"> 
            .arrow-list li{ 
               background-image: url(https://images.prismic.io/visa/f306839e-268c-42c5-bb04-453e46b89cec_list-arrow.svg);
               background-repeat: no-repeat;
               background-position: 0 11px;
               list-style-type: none;
               padding-left: 1.6rem;
            }
            .arrow-list li a{
                color:black; 
                font-weight:400;
            }
            .arrow-list li a:hover{
                text-decoration: underline;
                 text-decoration-color: red;
            }
            .desgin a{
                display: block;
                color: #ec1b23;
                margin-bottom: 2rem;
                text-decoration: underline;
                font-weight: 400;
            }
            .desgin a:hover
            {
                text-decoration:none;
            }
            .desgin1 a{
                display: block;
                color: #ec1b23;
                margin-bottom: 2rem;
                text-decoration: underline;
                line-height: 1.9;
                font-weight: 400;
            }
            .desgin1 a:hover
            {
                text-decoration:none;
            }
            .post__published {
                    font-size: 0.8rem;
                    line-height: 2.2rem;
            }
            h1{ 
                font-family: GTSectraDisplay;
                display: block;
                font-size: 2.9rem;
                font-weight:100;   
            }
            button {
                border: 1px solid #a6a6a6;
            }

            ol li {
  counter-increment: list;
  list-style-type: none;
  position: relative;
  font-size:17px;
  line-height:1.9em;  
}
ol li:before {
  color: #ec1b23;
  content: counter(list) ".";
  left:-32px;
  font-weight:700;  
  position: absolute;
  text-align: right;
  width: 16px;
}
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-thumb {
    background: #797979;
}
::-webkit-scrollbar-track {
    background: #eee;
}
#backcolor{
    margin-top:8em;
    padding-top:5rem;
    padding-bottom: 5.5rem;
  /*  background: linear-gradient(134.54deg,#edecec,#dbdbdb);*/
  background-color:rgb(220,220,220); 
    overflow: hidden;
}
.card{
  background-color:rgb(220,220,220); 
/*  background: linear-gradient(134.54deg,#edecec,#dbdbdb);*/
  overflow: hidden;
  border: 1px solid #a6a6a6;
  max-width:400px; 
   color: inherit;
   margin-bottom:-10%; 
   margin-bottom:17px; 
}
              .card .card-body .card-text{
                font-family: GTSectraDisplay;
                display: block;
                color:black; 
                font-size: 1rem;
                font-weight:200; 
                padding-left:45px; 
              }
              .card .card-body .card-text a{
                font-family: GTSectraDisplay;
                display: block;
                text-decoration:none;
                color:black; 
                font-size:20px; 
                font-size: 1.3rem;
                font-weight:200; 
              }

              .card .card-body .card-text svg{
                    display: block;  
                    float:right;  
                    margin-right: 0;
                    position: relative;
                    width: 30%; 
                    margin-right: -13.3%;
                    margin-top:1.9px; 
                    margin-bottom: -3rem;

              }
  </style>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-7 col-md-12 col-xs-12 mb-5 mt-5">
            <br>
            <h1> News and Updates</h1>
            <h6 class="desgin mt-5"><a href="{{ Request::root() }}/covid-19/covid">Notice Covid-19</a> </h6>
            <div class="post__published">Published on 22/3/2020</div>
            <h6 class="desgin1 mt-4"><a href="">On the procedure of border crossing of the Russian<br>-Belarusian section of the State border of the Russian<br> Federation by foreign citizens and stateless persons.
            </a></h6>
            <div class="post__published">Published on 8/10/2018</div>

            <button type="button" class="btn mt-2">More News &nbsp;&nbsp;<i style="font-size:17px;color:red;" class="fa"> &#xf105;</i></button>
        </div>

        <div class="col-lg-5 col-md-12 col-xs-12 mb-5 mt-5">
            <br>
            <h1 >Which type of Visa are you searching for?</h1>
             <ul class="arrow-list mt-4 mb-5">
    <li><a href="">Humanitarain Visa</a></li><br>
    <li><a href="">Business Visa</a></li><br>
    <li><a href="">Student Visa</a></li><br>
    <li><a href="">Transit Visa </a></li><br>
    <li><a href="">Work Visa </a></li><br>
    <li><a href="">Private Visa</a></li><br>
    <li><a href="">Tourist Visa</a></li>
   </ul>
        </div>        
    </div>

</div>
<div class="container mt-5">
<hr style="height:2px;border-width:0.0em;color:lightgray;background-color:lightgray;">
    <div data-wio-id="{{ $document->id }}">
        <h1 class=" mt-5 mb-5">{{ RichText::asText($document->data->title1)}}</h1>
        <div>
            <ol>
                <li>
                    <strong>{!! RichText::asHtml($document->data->title2) !!}</strong>
                    {!! RichText::asHtml($document->data->para1) !!}
                </li>
                <li>
                    {!! RichText::asHtml($document->data->para2) !!}            
                </li>
                <li>
                    <strong>{!! RichText::asHtml($document->data->title4) !!}</strong>
                    {!! RichText::asHtml($document->data->para3) !!}
                </li>
            </ol>

        </div>
        </div>
     </div>
            <section id="backcolor">
                    <div class="container">
                        <div class="row"> 
                            <div class="col-lg-12 col-md-12 col-xs-12">
                            
                        <h1>{!! RichText::asHtml($document->data->use) !!}</h1><br>

    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text"><a href="https://mid.ru/ru/home">Embassy Of The Russian <br>Federation in the Federal <br>Republic of Austria
         <svg xmlns="http://www.w3.org/2000/svg" width="49.414" height="49.414" viewBox="0 0 49.414 49.414">
          <g transform="translate(2.414 2.414)">
            <g fill="none" stroke-miterlimit="10">
              <path d="M 46 0 L 46 46 L 0 46 L 46 0 Z" stroke="none" fill="transparent" class="path-fill-hover"></path>
              <path d="M 46 0 L 0 46 L 46 46 L 46 0 M 47 -2.414211273193359 L 47 0 L 47 46 L 47 47 L 46 47 L 0 47 L -2.414211273193359 47 L -0.7071113586425781 45.29288864135742 L 45.29288864135742 -0.7071113586425781 L 47 -2.414211273193359 Z" stroke="none" fill="#ec1b23" class="path-fill">
              </path></g>
              <g transform="translate(26 29)">
              <path d="M0,4,4,0H4L8,4" transform="translate(10.746) rotate(90)" fill="none" stroke="#ec1b23" stroke-miterlimit="10" stroke-width="1" class="path-stroke"></path>
              <path d="M9.5,1H.746" transform="translate(0 3)" fill="none" stroke="#ec1b23" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" class="path-stroke">
              </path></g></g></svg></a><a href="https://mid.ru/ru/home" target="_blank" class="useful-links__link"></p></a>
          </div>
      </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text"><a href="https://mid.ru/ru/home">General Consulate of the <br>Russian Federation in<br> Salzburg
         <svg xmlns="http://www.w3.org/2000/svg" width="49.414" height="49.414" viewBox="0 0 49.414 49.414"><g transform="translate(2.414 2.414)"><g fill="none" stroke-miterlimit="10"><path d="M 46 0 L 46 46 L 0 46 L 46 0 Z" stroke="none" fill="transparent" class="path-fill-hover"></path><path d="M 46 0 L 0 46 L 46 46 L 46 0 M 47 -2.414211273193359 L 47 0 L 47 46 L 47 47 L 46 47 L 0 47 L -2.414211273193359 47 L -0.7071113586425781 45.29288864135742 L 45.29288864135742 -0.7071113586425781 L 47 -2.414211273193359 Z" stroke="none" fill="#ec1b23" class="path-fill"></path></g><g transform="translate(26 29)"><path d="M0,4,4,0H4L8,4" transform="translate(10.746) rotate(90)" fill="none" stroke="#ec1b23" stroke-miterlimit="10" stroke-width="1" class="path-stroke"></path><path d="M9.5,1H.746" transform="translate(0 3)" fill="none" stroke="#ec1b23" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" class="path-stroke"></path></g></g></svg>
       </a><a href="https://mid.ru/ru/home" target="_blank" class="useful-links__link"></a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text"><a href="">The Ministry of Foreign<br> Affairs of the Russian<br> Federation
        <svg xmlns="http://www.w3.org/2000/svg" width="49.414" height="49.414" viewBox="0 0 49.414 49.414"><g transform="translate(2.414 2.414)"><g fill="none" stroke-miterlimit="10"><path d="M 46 0 L 46 46 L 0 46 L 46 0 Z" stroke="none" fill="transparent" class="path-fill-hover"></path><path d="M 46 0 L 0 46 L 46 46 L 46 0 M 47 -2.414211273193359 L 47 0 L 47 46 L 47 47 L 46 47 L 0 47 L -2.414211273193359 47 L -0.7071113586425781 45.29288864135742 L 45.29288864135742 -0.7071113586425781 L 47 -2.414211273193359 Z" stroke="none" fill="#ec1b23" class="path-fill"></path></g><g transform="translate(26 29)"><path d="M0,4,4,0H4L8,4" transform="translate(10.746) rotate(90)" fill="none" stroke="#ec1b23" stroke-miterlimit="10" stroke-width="1" class="path-stroke"></path><path d="M9.5,1H.746" transform="translate(0 3)" fill="none" stroke="#ec1b23" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" class="path-stroke"></path></g></g></svg></a><a href="https://salzburg.mid.ru/" target="_blank" class="useful-links__link"></p></a> 
      </div>
    </div>
  </div>
</div>
                    </div>
                    </div>
                    </div>
            </section>

@stop