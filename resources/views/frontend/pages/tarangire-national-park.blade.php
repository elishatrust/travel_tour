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
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/wildlife/kangaroo.webp') }}" alt="me-2" />
          </div>
          <div class="col-lg-5 col-sm-12">
              <div class="tour-hightligh mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Overview</h5>
                  </div>
                  <div class="">
                      <li class="mb-2"><strong>Size :</strong> 2,850 km square</li>
                      <li class="mb-2"><strong>Location :</strong> Northern Tanzania, near Manyara & Serengeti</li>
                      <li class="mb-2"><strong>Famous For :</strong> Elephants, baobab trees, and unique landscapes</li>                  
                  </div>
              </div>
              <div class="include-pack mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Why Visit?</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Largest Elephant Population in Tanzania – Over 3,000 elephants.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Scenic & Less Crowded – A hidden gem compared to Serengeti.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Baobab Trees & Birdlife – Over 550 bird species, including ostriches and lovebirds.
                      </li> 
                  </div>
              </div>
              <div class="exclude-packs mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Wildlife Highlights</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Big Five (Elephants, Lions, Leopards, Buffalo, Rhinos).
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Rare Animals – African wild dogs, oryx, and gerenuk.
                      </li>                      
                  </div>
              </div>
              <div class="packing-list mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Visit</h5>
                  </div>
                  <div class="">                  
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Dry Season (June–October) – Animals gather around Tarangire River.
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Wet Season (November–May) – Lush green landscapes, best for birdwatching.
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