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
                <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/more/0.jpg') }}" alt="me-2" />
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="tour-hightligh mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Overview</h5>
                    </div>
                    <div class="">
                        <li class="mb-2"><strong>Height :</strong> 5,895 meters (19,341 feet)</li>
                        <li class="mb-2"><strong>Location :</strong> Kilimanjaro National Park, Tanzania</li>
                        <li class="mb-2"><strong>Type :</strong> Stratovolcano with three cones: Kibo, Mawenzi, and Shira.</li>
                        <li class="mb-2"><strong>World’s Tallest Free-Standing Mountain & Africa’s Highest Peak</strong> </li>                      
                    </div>
                </div>
                <div class="include-pack mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Why Visit?</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            One of the 7 Summits – It’s the highest peak in Africa.
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            No Technical Climbing Required – You don’t need special mountaineering skills.
                        </li>
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            Multiple Climate Zones – Trek from rainforest to alpine desert to icy summit.
                        </li> 
                    </div>
                </div>
                <div class="exclude-packs mb-4">
                    <div class="">
                        <h5 class="h6 text-muted py-3 text-uppercase">Climbing Routes</h5>
                    </div>
                    <div class="">
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Marangu Route (5–6 days) – “Coca-Cola Route,” easier but less scenic.
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Machame Route (6–7 days) – “Whiskey Route,” more challenging but scenic.
                        </li>                     
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Lemosho Route (7–9 days) – Less crowded, highly scenic.
                        </li>                      
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Rongai Route (6–7 days) – Best for dry season, starts from Kenya side.
                        </li>                      
                        <li class="mb-2">
                            <i class="far fa-times-circle text-primary me-1"></i> 
                            Umbwe Route (5–6 days) – Steep and difficult, for experienced climbers.
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
                            January–March (colder but less crowded)
                        </li>                   
                        <li class="mb-2">
                            <i class="far fa-check-circle text-primary me-1"></i> 
                            June–October (best weather, but crowded)
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