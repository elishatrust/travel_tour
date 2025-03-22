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
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/more/Mt-Meru.jpg') }}" alt="me-2" />
          </div>
          <div class="col-lg-5 col-sm-12">
              <div class="tour-hightligh mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Overview</h5>
                  </div>
                  <div class="">
                      <li class="mb-2"><strong>Height :</strong> 4,566 meters (14,980 feet)</li>
                      <li class="mb-2"><strong>Location :</strong> Arusha National Park, Tanzania</li>
                      <li class="mb-2"><strong>Type :</strong> Stratovolcano</li>
                      <li class="mb-2"><strong>Last Eruption :</strong> ~100 years ago</li>
                      <li class="mb-2"><strong>Ranking :</strong> 2nd highest mountain in Tanzania, 5th highest in Africa</li>                    
                  </div>
              </div>
              <div class="include-pack mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Why Visit?</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Ideal for Acclimatization – A great training climb before tackling Kilimanjaro.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Stunning Wildlife & Landscapes – Lush forests, colobus monkeys, giraffes, buffaloes, and breathtaking views.
                      </li>
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          Less Crowded – A more serene and peaceful trek compared to Kilimanjaro.
                      </li> 
                  </div>
              </div>
              <div class="exclude-packs mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Climbing Details</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Duration: 3–4 days
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Route: Momella Route (the only official route)
                      </li>                     
                      <li class="mb-2">
                          <i class="far fa-times-circle text-primary me-1"></i> 
                          Key Stops: Momella Gate → Miriakamba Hut → Saddle Hut → Socialist Peak
                      </li>                      
                  </div>
              </div>
              <div class="packing-list mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Best Time to Climb</h5>
                  </div>
                  <div class="">
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          January–March (warmer, less rainfall)
                      </li>                   
                      <li class="mb-2">
                          <i class="far fa-check-circle text-primary me-1"></i> 
                          June–October (dry season, great visibility)
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