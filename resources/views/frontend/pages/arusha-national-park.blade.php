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

        <div class="row g-4">
          <div class="col-lg-7 col-sm-12">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/park/a4.jpg') }}" alt="me-2" />
          </div>
          <div class="col-lg-5 col-sm-12">
              <div class="tour-hightligh mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Overview</h5>
                  </div>
                  <div class="">
                      <li class="mb-2"><strong>Size :</strong> 552 km square</li>
                      <li class="mb-2"><strong>Location :</strong> 50 km from Kilimanjaro, near Arusha city</li>
                      <li class="mb-2"><strong>Known For :</strong> Mount Meru, Momella Lakes, and Ngurdoto Crater</li>                  
                  </div>
              </div>
              <div class="include-pack mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Why Visit?</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Closest National Park to Arusha – Ideal for short safaris.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Diverse Landscapes – Rainforests, savannas, lakes, and craters.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Wildlife – Giraffes, buffaloes, zebras, colobus monkeys, and sometimes leopards.
                      </li> 
                  </div>
              </div>
              <div class="exclude-packs mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Key Attractions</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Ngurdoto Crater – Mini version of Ngorongoro Crater.
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Momella Lakes – Home to thousands of flamingos.
                      </li>                     
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Mount Meru – A must for trekking enthusiasts.
                      </li>                      
                  </div>
              </div>
              <div class="packing-list mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Best Activities</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Walking Safaris with an armed ranger.
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Canoeing on Momella Lakes.
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Game Drives & Birdwatching.
                      </li>                      
                  </div>
              </div>                
             </div>
          </div>      
        </div>
    </div>
</div>


@include('frontend.layouts.destinations')

@endsection