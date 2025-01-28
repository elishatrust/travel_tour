@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
        </div>

        <div class="row g-4 mt-3">
          <div class="col-lg-5 col-sm-12">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/safari/maasai.png') }}" alt="me-2" />
               <i>Maasai Cultural Experience</i>
          </div>
            <div class="col-lg-7 col-sm-12">
               <p style="text-align: justify"> 
                    Nestled at the foothills of Mount Kilimanjaro, along the Moshi-Arusha border, 
                    lies a vibrant community of the Maasai people—one of Tanzania’s most renowned 
                    indigenous tribes. Despite modernization, the Maasai have remarkably preserved 
                    their ancestral customs, traditions, and way of life.
                    Within their semi-nomadic society, men and older children herd cattle in search 
                    of fertile grazing lands, while women oversee the household, care for younger children, 
                    and engage in essential domestic activities.
               </p>
               <p style="text-align: justify">
                    This immersive experience offers a rare glimpse into the daily life of the Maasai, 
                    allowing you to actively participate in their time-honored traditions. From crafting 
                    intricate beaded jewelry to discovering the healing properties of indigenous medicinal plants, 
                    each moment is a step into their fascinating world. Guests can also savor an authentic 
                    roasted goat feast, engage in captivating storytelling sessions, and experience the 
                    rhythmic songs and dances that hold deep cultural significance.
               </p>
               <p style="text-align: justify">
                    For those visiting at an opportune time, witnessing a Maasai wedding or circumcision 
                    ceremony can provide an even deeper understanding of their rites of passage.
                    Whether you choose a day trip or opt for an overnight stay at the luxurious Maasai Lodge, 
                    this journey promises an unforgettable and enriching cultural experience, offering profound 
                    insights into a community that continues to live in harmony with nature.
               </p>               
            </div>
        </div>
    </div>
</div>


@endsection