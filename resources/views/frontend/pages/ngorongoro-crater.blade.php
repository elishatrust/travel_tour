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
          <div class="col-lg-5 col-sm-12">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/services/b.jpg') }}" alt="me-2" />
          </div>
          <div class="col-lg-7 col-sm-12">
              <div class="tour-hightligh mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Overview</h5>
                  </div>
                  <div class="">
                      <li class="mb-2"><strong>Size :</strong> 260 km square</li>
                      <li class="mb-2"><strong>Location :</strong> Ngorongoro Conservation Area, Northern Tanzania</li>
                      <li class="mb-2"><strong>Depth :</strong> 610 meters deep</li>                  
                      <li class="mb-2"><strong>UNESCO World Heritage Site</strong></li>                  
                  </div>
              </div>
              <div class="include-pack mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Why Visit?</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Natural Wildlife Sanctuary – Over 25,000 animals live here year-round.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          High Chance to See the Big Five – Lions, leopards, rhinos, buffalo, elephants.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Stunning Scenery – A mix of savanna, lakes, forests, and volcanic landscapes.
                      </li> 
                  </div>
              </div>
              <div class="packing-list mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Wildlife Highlights</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Black Rhinos – One of the few places in Tanzania to see them.
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Flamingos – Found in Lake Magadi inside the crater.
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Predators – Lions, hyenas, and cheetahs thrive due to the high prey density.
                      </li>                      
                  </div>
              </div>   
              <div class="exclude-packs mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Visit</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Year-Round Destination
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Dry Season (June–October) – Best for game viewing.
                      </li>                     
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Wet Season (November–May) – Beautiful green landscape, fewer tourists.
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