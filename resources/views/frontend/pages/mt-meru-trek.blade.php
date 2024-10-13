@extends('frontend.layouts.app')
<style>
    .accordion-item .accordion-button{
        cursor: pointer;
    }
    .accordion-item .accordion-button:hover{
        background-color: var(--primary);
        color: white;
    }
</style>
@section('content')
@include('frontend.layouts.inc_mt_meru')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-3 wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>Mount Meru Routes</p>
                {{-- <h1 class="display-5123 h2 mb-3" style="">Special <span style="color:#f1671e!important">Trekking</span></h1> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 wow123 fadeInUp" data-wow123-delay="0.7s">
                <div class="accordion" id="accordionExample">                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Overview
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row p-4">
                                    <div class="col-lg-7 col-md-6 col-sm-12">
                                        <strong class="">Mount Meru Ascent Routes</strong><br><br>
                                        <p>
                                            Mount Meru is the highest peak in Tanzania, It stands tall at an elevation of 4,966 meters 
                                            (15,505 feet) above sea level, making it the highest peak in Africa and the highest single 
                                            free-standing mountain above sea level in the world. 
                                        </p>
                                        <p>
                                            Mount Meru, located east of the Great Rift Valley and approximately 40 km southwest of 
                                            Kilimanjaro in northern Tanzania's Arusha National Park, is an active volcano and the 
                                            second-highest mountain in Tanzania. It is also considered by some to be the fourth-highest 
                                            mountain in Africa, after Kilimanjaro, 
                                            Mount Kenya, and the Rwenzori Mountains (also known as the Mountains of the Moon).
                                        </p>
                                        <p>
                                            Around 500,000 years ago, a massive eruption reshaped Mount Meru, 
                                            destroying its original cone and creating a horseshoe-shaped crater 
                                            with its eastern side blown away. The mountain’s summit now lies on 
                                            the western side, and its inner walls soar more than 1,500 meters above the crater floor, 
                                            making them among the tallest cliffs in Africa.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <img class="img-fluid mb-3" style="border-radius:10px; width:100%;height:400px;" src="{{ asset('assets/frontend/img/MtMeru.webp') }}" alt="Mount Kilimanjaro" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Service -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 wow123 fadeInUp" data-wow123-delay="0.1s">
            <div class="col-lg-10 col-md-10 col-sm-12 justify-center">
                <ul class="list-group">
                    <li class="list-group-item active text-start" aria-current="true">An active item</li>
                    <li class="list-group-item">A second item

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima amet sed ab molestiae asperiores quo, quod consequatur. Alias suscipit error quae cupiditate nesciunt eos ducimus rerum? Et error aliquid dolore?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ab, harum aliquid consequatur delectus modi debitis fugit commodi, impedit odio enim itaque officia iste? Impedit vel itaque necessitatibus in molestias!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, ad eligendi facere eaque mollitia, distinctio beatae animi recusandae voluptate quod necessitatibus? Fugiat omnis porro quas est cupiditate reprehenderit deleniti ad.
                        </p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Destination -->
@include('frontend.layouts.destinations')


@endsection