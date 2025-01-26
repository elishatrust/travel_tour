@extends('frontend.layouts.app')
<style>
    .accordion-item .accordion-button{
        cursor: pointer;
    }
    .accordion-item .accordion-header{
        cursor: pointer;
        border-radius: 10px;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }
    .accordion-item .accordion-button:hover{
        background-color: var(--primary);
        color: white;
    }
</style>
@section('content')
@include('frontend.layouts.inc_mt_kili')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-3Up">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Mount Kilimanjaro Routes</p>
                <h1 class="display-5123 h2 mb-3" style="">Mount Kilimanjaro Climbing Tours</h1>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-9 col-sm-12Up" data-wow123-delay="0.7s">
                <div class="accordion shadow-sm" id="accordionExample">
                    
                    <div class="accordion-item">
                        <h1 class="accordion-header">
                            <button class="accordion-button" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Overview
                            </button>
                        </h1>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7 col-sm-12">
                                        <strong class="">Mount Kilimanjaro Ascent Routes</strong><br><br>
                                        <p style="text-align:justify">
                                            Kilimanjaro is the highest peak in Africa, It stands tall at an elevation of 5,895 meters 
                                            (19,341 feet) above sea level, making it the highest peak in Africa and the highest single 
                                            free-standing mountain above sea level in the world. 
                                            The northernmost part of the mountain range is called the Northern Circuit.
                                        </p>
                                        <p style="text-align:justify">
                                            Mount visited yearly by over 50,000 trekkers who aspire to reach its summit, 
                                            with the average summit success rate across all climbers and routes 
                                            being 70-80%. However, summit success rate heavily depends upon the route, 
                                            as routes vary considerably in 
                                            terms of acclimatization profile and climb duration.
                                        </p>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/MtKili.webp') }}" alt="Mount Kilimanjaro" />
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <p style="text-align:justify">
                                            The Mountain has Seven main routes which lead to the summit, 
                                            Uhuru Peak, one of which starts on the Northern side of the mountain and 
                                            the rest on the Southern side.
                                            The routes are Marangu, Machame, Lemosho, Shira, 
                                            Rongai, Northern Circuit and Umbwe.
                                        </p>
                                        <p class="text-italic">
                                            <i>
                                                * Here now are descriptions of each of the
                                                different Kilimanjaro ascent routes.
                                            </i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            7 Days <span class="mx-3">Lemosho Route</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7  col-sm-12">
                                        <strong style=";">Lemosho Route</strong> <br><br>
                                        <p style="text-align:justify">
                                            This route is often considered the most beautiful on Kilimanjaro and 
                                            is one of the most popular. It starts on the mountain's western slopes, 
                                            offering scenic views as it curves around the southern face of Kibo Peak. 
                                            The descent follows the southeastern slopes, taking you down along the Mweka route.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 7-8 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 56 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Summit Success Rate : </strong> High </li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0028.jpg') }}" alt="Lemosho Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            7 Days <span class="mx-3">Machame Route</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7  col-sm-12">
                                        <strong style=";">Machame Route</strong> <br><br>
                                        <p style="text-align:justify">
                                            Machame is the highest peak in the Northern Circuit, and this route is 
                                            the most scenic and popular on Kilimanjaro. It starts at the highest point 
                                            of the circuit and descends along the southeastern slopes, taking you down 
                                            along the Mweka route.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 7 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 49 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/41.jpg') }}" alt="Machame Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            6 Days <span class="mx-3">Marangu Route</span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7  col-sm-12">
                                        <strong style=";">Marangu Route</strong> <br><br>
                                        <p style="text-align:justify">
                                            Marangu is the highest peak in the Northern Circuit and this route is the most 
                                            scenic and popular on Kilimanjaro. It starts at the highest point of the circuit 
                                            and descends along the southeastern slopes, taking you down along the Mweka route.
                                        </p>
                                        <p style="text-align:justify">
                                            This is the only route on Kilimanjaro that provides hut accommodations, 
                                            making it especially popular with budget-conscious tour operators and trekkers. 
                                            The trail ascends along the eastern slope, with the descent following the same path.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 6 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 64 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0022.jpg') }}" alt="Marangu Route" />
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            6 Days <span class="mx-3">Rongai Route</span>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7  col-sm-12">
                                        <strong>Rongai Route</strong> <br><br>
                                        <p style="text-align:justify">
                                            Rongai is the highest peak in the Northern Circuit and this route is the most 
                                            scenic and popular on Kilimanjaro. It starts at the highest point of the circuit 
                                            and descends along the southeastern slopes, taking you down along the Mweka route.
                                        </p>
                                        <p style="text-align:justify">
                                            Rongai is a popular route for families and solo travelers who want to explore the 
                                            peaks, but it is a less frequented route. Some fine views, wild, and least scenic, 
                                            camping.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 5-6 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 65 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/0020.jpg') }}" alt="Rongai Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            7 Days <span class="mx-3">Shira Route</span>
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7  col-sm-12">
                                        <strong>Shira Route</strong> <br><br>
                                        <p style="text-align:justify">
                                            Rongai is the highest peak in the Northern Circuit and this route is the most 
                                            scenic and popular on Kilimanjaro. It starts at the highest point of the circuit 
                                            and descends along the southeastern slopes, taking you down along the Mweka route.
                                        </p>
                                        <p style="text-align:justify">
                                            Rongai is a popular route for families and solo travelers who want to explore the 
                                            peaks, but it is a less frequented route. Some fine views, wild, and least scenic, 
                                            camping.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 6 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 56 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/safari/31.jpg') }}" alt="Shira Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            9 Days <span class="mx-3">Northern Circuit Route</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-md-7  col-sm-12">
                                        <strong>Northern Circuit Route </strong> <br><br>
                                        <p style="text-align:justify">
                                            Longest and newest route, traversing nearly the entire mountain. 
                                            Very low traffic, great views, and a high success rate.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 9 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 90 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/Umbwe_route.avif') }}" alt="Northern Circuit Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="font-size: 20px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            6 Days <span class="mx-3">Umbwe Route</span>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-3">
                                    <div class="col-md-7  col-sm-12">
                                        <strong>Umbwe Route</strong> <br><br>
                                        <p style="text-align:justify">
                                            Umbwe is the highest peak in the Northern Circuit and this route is the most 
                                            scenic and popular on Kilimanjaro. It starts at the highest point of the circuit 
                                            and descends along the southeastern slopes, taking you down along the Mweka route.
                                        </p>
                                        <p style="text-align:justify">
                                            Umbwe is one of the most popular routes on Kilimanjaro for those looking for a 
                                            scenic and steep descent. It's also a great place for families to enjoy the view of the 
                                            entire mountain range.
                                        </p>
                                        <p style="text-align:justify">
                                            <ul>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Duration : </strong> 6 days</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Distance : </strong> 37 Km</li>
                                                <li><i class="far fa-check-circle text-primary me-2"></i> <strong>Descent Route : </strong> Mweka</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <div class="col-md-5  col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:250px;" src="{{ asset('assets/frontend/img/Umbwe-6-Days.png') }}" alt="Umbwe Route" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="tour">
                    <div class="header123">
                        <h5 class="title123 py-3 text-uppercase" style="font-size: 20px!important;">Trek Highlights</h5><hr>
                    </div>
                    <div class="body123">
                        <li class="mb-2"><strong>Day 0 :</strong> Arrival (Pick up) from Kilimanjaro International Airport – Moshi.</li>
                        <li class="mb-2"><strong>Day 1 :</strong> Moshi – Marangu Gate.</li>
                        <li class="mb-2"><strong>Day 2 :</strong> Marangu Gate – Mandara Hut.<li class="mb-2">
                        <li class="mb-2"><strong>Day 3 :</strong> Mandara Hut – Horombo Hut.</li>
                        <li class="mb-2"><strong>Day 4 :</strong> Horombo Hut – Kibo Hut.</li>
                        <li class="mb-2"><strong>Day 5 :</strong> Uhuru Peak – Horombo Hut.</li>
                        <li class="mb-2"><strong>Day 6 :</strong> Horombo Hut – Marangu Gate.</li>
                        <li class="mb-2"><strong>Day 7 :</strong> Finish – </li>                      
                    </div>
                </div>
                <div class="start_cost py-4">
                    <div class="start_ text-center px-5 py-3" style="background:#47a0ff;color:white">
                        <h6 class="text-center text-white">Starting from</h6>
                    </div>
                    <div class="cost_ text-center px-5 py-3 " style="background:#f1671e; color:white">
                        <span class="fs-4 me-3">&#128540;</span>
                        <strong class="h4 text-white">$2,300.00</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl">
    <div class="container pt-5">
        <div class="row g-5">       
            <div class="col-md-4 col-sm-12Up">
                <div class="img-border123 h-100">
                    <a target="_blank" href="https://earth.google.com/web/@-3.09344655,37.38195524,4627.36994853a,50242.59166852d,35y,0h,60t,0r/data=CgRCAggBOgMKATBKDQj___________8BEAA">
                        <img class="img-fluid w-100" style="border-radius:10px; width:100%;height:auto;" src="{{ asset('assets/frontend/img/KilimanjaroMapRotes2.png') }}" alt="#" />
                    </a>
                    <p class="mt-2"><i>Click the image above to explore Kilimanjaro in Google Earth</i></p>
                </div>
            </div>
            <div class="col-md-8 col-sm-12Up">
                <h1 class="display-5123 h2 mb-5">Features & Key Considerations</h1>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Acclimatization days : 
                    </span>
                    Longer routes offer more opportunities for acclimatization, 
                    increasing the chances of reaching the summit.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Scenic views : 
                    </span>
                    Routes like Northern Circuit, Lemosho, and Machame offer more scenic views, 
                    while Rongai and Umbwe are less scenic.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Traffic : 
                    </span>
                    Northern Circuit and Lemosho are less crowded, while Marangu and Machame are more popular.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Camping vs Huts : 
                    </span>
                    Routes like Lemosho, Machame, and Rongai involve camping, while Marangu has huts.
                </p>
                <p class="mb-3">
                    <span class="fw-bold">
                        <i class="far fa-check-circle text-primary me-3"></i>Success rate : 
                    </span>
                    70-80% average, depending on route and individual factors
                </p>
            </div>   
        </div>
    </div>
</div>

{{-- PWD : Xufo7SqCiL | USER : if0_37219502 --}}
{{-- PWD : pt0Fv54tbVW | USER : if0_37506881 --}}


<div class="container-xxl">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12 col-sm-12 justify-center">
                <ul class="list-group">
                    <li class="list-group-item bg-light text-start h4 py-3" aria-current="true">
                        Summary of Routes
                    </li>
                    <li class="list-group-item">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Route Name</th>
                                        <th>Descriptions</th>
                                        <th>Duration</th>
                                        <th>Distance</th>
                                        <th>Descent Route</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rongai Route</td>
                                        <td>
                                            Long access drive, remote, less frequented, some fine, wild, least scenic,
                                            Good for acclimatization.
                                        </td>
                                        <td>5-6 days</td>
                                        <td>65 Km (40 mi)</td>
                                        <td>Mweka</td>
                                    </tr>
                                    <tr>
                                        <td>Shira Route</td>
                                        <td>
                                            This route has the highest starting elevation. 
                                            It begins on the western slope and then skirts around the south of Kibo Peak. 
                                        </td>
                                        <td>6 days</td>
                                        <td>56 Km (47 mi)</td>
                                        <td>Mweka</td>
                                    </tr>
                                    <tr>
                                        <td>Northern Circuit Route</td>
                                        <td>
                                            Newest route on Kilimanjaro. Very low traffic due to very long time on the mountain, 
                                            traverses nearly the entire mountain including the north side. 
                                            Long route with great views.
                                        </td>
                                        <td>9 days</td>
                                        <td>90 Km (56 mi)</td>
                                        <td>Mweka</td>
                                    </tr>
                                    <tr>
                                        <td>Machame Route</td>
                                        <td>
                                            Second most popular route. Forested traverse to Barafu.
                                            This route has the highest starting elevation. 
                                            It begins on the western slope and then skirts around the south of Kibo Peak. 
                                        </td>
                                        <td>7 days</td>
                                        <td>49 Km (30 mi)</td>
                                        <td>Mweka</td>
                                    </tr>
                                    <tr>
                                        <td>Lemosho Route</td>
                                        <td>
                                            Long access drive, remote, less frequented, fine, wild, least scenic,
                                            Good for acclimatization.
                                        </td>
                                        <td>5-6 days</td>
                                        <td>65 Km (40 mi)</td>
                                        <td>Mweka</td>
                                    </tr>
                                    <tr>
                                        <td>Umbwe Route</td>
                                        <td>
                                            Shortest and steepest route, 
                                            very physically taxing and requires serious endurance. Dangerous route.
                                        </td>
                                        <td>6 days</td>
                                        <td>37 Km (23 mi)</td>
                                        <td>Mweka</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="7 Days Rongai Route">
                    <div class="card-body">
                        <h5 class="card-title">7 Days Rongai Route</h5>
                        <p class="card-text">
                            This is a 7 days Rongai route itinerary variation with an extra day for acclimatization. Gradually sloping towards the summit.
                        </p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-bookmark-star-fill me-2 fs-5 text-default" style="color:#f5a425"></i>
                        Start from <span class="fw-bold ms-2">$2,000.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="9 Days Crater Camp via Lemosho Route">
                    <div class="card-body">
                        <h5 class="card-title">9 Days Lemosho Route</h5>
                        <p class="card-text">
                            This 9-day crater camp trek combined with the 8-day Lemosho route climb is a unique and ultimate Kilimanjaro experience.
                        </p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-bookmark-star-fill me-2 fs-5 text-default" style="color:#f5a425"></i>
                        Start from <span class="fw-bold ms-2">$2,300.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="7 Days Lemosho Route">
                    <div class="card-body">
                        <h5 class="card-title">7 Days Lemosho Route</h5>
                        <p class="card-text">
                            The shorter 7-day Lemosho route variant does not include the extra acclimatization day as the 8-day Lemosho route itinerary.
                        </p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-bookmark-star-fill me-2 fs-5 text-default" style="color:#f5a425"></i>
                        Start from <span class="fw-bold ms-2">$1,950.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" alt="6 Days Machame Route">
                    <div class="card-body">
                        <h5 class="card-title">6 Days Machame Route</h5>
                        <p class="card-text">
                            For mountain climbers with prior expertise and the capacity to acclimate more quickly, the 6-day Machame route is advised.
                        </p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-bookmark-star-fill me-2 fs-5 text-default" style="color:#f5a425"></i>
                        Start from <span class="fw-bold ms-2">$1,650.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Destination -->
@include('frontend.layouts.destinations')

<div class="container-xxl">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12 col-sm-12 justify-center">
                <ul class="list-group">
                    <li class="list-group-item bg-light text-start h4 py-3" aria-current="true">
                        Best Time to Trek Mount Kilimanjaro
                    </li>
                    <li class="list-group-item">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Month</th>
                                        <th>Trekking Conditions</th>
                                        <th>Recommended or Not?</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>January</td>
                                        <td>Dry season, clear skies, warmer temperatures</td>
                                        <td class="text-success">✅ Highly Recommended</td>
                                        <td>Excellent conditions, good visibility, popular month for trekking</td>
                                    </tr>
                                    <tr>
                                        <td>February</td>
                                        <td>Dry season, clear skies, warmer temperatures</td>
                                        <td class="text-success">✅ Highly Recommended</td>
                                        <td>Similar to January, great for trekking</td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>Transition to the wet season, increasing rain</td>
                                        <td class="text-warning">⚠️ Possible, but not ideal</td>
                                        <td>The start of the rainy season, trails may get muddy</td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>Long rains, wet and slippery trails</td>
                                        <td class="text-danger">❌ Not Recommended</td>
                                        <td>Heavy rains make trekking difficult, lower visibility</td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>Long rains, wet and slippery trails</td>
                                        <td class="text-danger">❌ Not Recommended</td>
                                        <td>Persistent rains, very challenging conditions</td>
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>Beginning of the dry season, cooler temperatures</td>
                                        <td class="text-success">✅ Recommended</td>
                                        <td>Fewer crowds, starting to dry out, good time for acclimatization</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dry season, cool temperatures</td>
                                        <td class="text-success">✅ Highly Recommended</td>
                                        <td>Cool and dry, perfect trekking conditions, but popular and can be busy</td>
                                    </tr>
                                    <tr>
                                        <td>August</td>
                                        <td>Dry season, cool temperatures</td>
                                        <td class="text-success">✅ Highly Recommended</td>
                                        <td>Similar to July, very popular, book in advance</td>
                                    </tr>
                                    <tr>
                                        <td>September</td>
                                        <td>Dry season, cool temperatures</td>
                                        <td class="text-success">✅ Highly Recommended</td>
                                        <td>Still a great time to trek, clear skies, good conditions</td>
                                    </tr>
                                    <tr>
                                        <td>October</td>
                                        <td>End of dry season, start of short rains</td>
                                        <td class="text-warning">⚠️ Possible, but be cautious</td>
                                        <td>Transitioning to the short rainy season, conditions may vary</td>
                                    </tr>
                                    <tr>
                                        <td>November</td>
                                        <td>Short rains, unpredictable weather</td>
                                        <td class="text-danger">❌ Not Recommended</td>
                                        <td>Unpredictable showers, slippery trails</td>
                                    </tr>
                                    <tr>
                                        <td>December</td>
                                        <td>Short rains ending, transitioning to dry season</td>
                                        <td class="text-warning">⚠️ Possible, but be cautious</td>
                                        <td>Late December sees better conditions as the rains subside</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection