@extends('frontend.layouts.app') 
@section('content')

<div class="container-xxl py-5">
     <div class="container">
         <div class="row mb-5">
             <div class="col-lg-12 col-sm-12">
                 <h1 class="h2 mb-3">{{ $page_title }}</h1>
                 <hr>
             </div>
            <div class="col-lg-12 col-sm-12 p-4" style="background: #f3f4f5!important; border-radius:5px;">  
                <h4 class="mb-3" style="color: #f1671e">Tour Overview</h4>
                <p style="text-align: justify">
                    Tanzania offers a variety of captivating day trips that allow visitors to explore its rich culture, breathtaking landscapes, and abundant wildlife. From climbing the lower slopes of Mount Kilimanjaro to experiencing local traditions, these excursions provide unforgettable experiences. Below is a detailed description of some of the best day trips in Northern Tanzania.
               </p>
            </div>
        </div>

        <div class="row mb-4">
          <div class="col-lg-8 col-sm-12 h2" style="color: #f1671e">
              <span class="" style="color: #f1671e">
                  <i class="fa fa-walking me-2"></i>
                  Day Tour
              </span>
          </div>
          <div class="col-lg-4 col-sm-12">
              <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">
                  Book Now
                  <i class="fa fa-arrow-right ms-3"></i>
              </a>
          </div>
      </div>


      <div class="row g-4">
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/kilimanjaro-rongai.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Mount Kilimanjaro Day Hike (Mandara Hut)
                    </h5>
                    <p style="text-align: justify">
                    Start your journey with a scenic transfer to the Marangu Gate, the entrance to Kilimanjaro National Park. After completing the park formalities, embark on a guided trek through lush rainforests, encountering diverse flora and fauna. This hike follows the Marangu Route, leading up to Mandara Hut (2,700m), where a small crater offers picturesque views. This trip is ideal for those who want to experience Kilimanjaro without attempting the summit.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 60 km from Moshi</li>
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong>  ~7 Hours</li>
                         <li><i class="fa fa-star me-2"></i><strong>Experience Level:</strong> Moderate</li>
                    </ul>
               </div>
          </div>
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/materuni.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Materuni Village & Coffee Tour
                    </h5>
                    <p style="text-align: justify">
                    Located at the base of Mount Kilimanjaro, Materuni Village offers a rich cultural and scenic experience. Enjoy breathtaking views of Moshi Town and Kilimanjaro while learning about the Chagga people's traditions. Visitors can participate in an authentic coffee-making process, from bean picking to roasting and brewing, followed by a locally prepared lunch.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong> Full-day tour</li>
                         <li><i class="fa fa-star me-2"></i><strong>Activities:</strong> Cultural visit, coffee-making experience, scenic views</li>
                    </ul>
               </div>
          </div>
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/moshi-tower.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Moshi Town Tour
                    </h5>
                    <p style="text-align: justify">
                    Discover the vibrant town of Moshi, a bustling gateway to Kilimanjaro. Visit local markets, churches, and historical landmarks, and explore cultural sites reflecting Tanzania’s heritage. The tour concludes with a delicious local lunch at one of Moshi’s best restaurants. This experience also allows for shopping, banking, and currency exchange if needed.
                    </p>
                    <ul class="list-unstyled mt-3">
                    <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong>  Half-day tour</li>
                    </ul>
               </div>
          </div>
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/marangu-waterfalls.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Marangu Waterfalls & Caves Tour
                    </h5>
                    <p style="text-align: justify">
                    Nestled against the backdrop of Mount Kilimanjaro, Marangu Waterfalls provide a tranquil setting for a scenic hike. Walk through lush landscapes to the waterfalls, where you can take a refreshing swim. The tour also includes a visit to ancient Chagga Caves, which were used as hiding places during tribal wars. The package includes a guide, transport, entrance fees, lunch, and mineral water.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong> Full-day tour (~7 hours)</li>
                         <li><i class="fa fa-star me-2"></i><strong>Activities:</strong> Hiking, swimming, cultural experience</li>
                    </ul>
               </div>
          </div>
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/Maasai.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Maasai Village Cultural Experience
                    </h5>
                    <p style="text-align: justify">
                    Visit the Olpopongi Maasai Cultural Village, the first authentic Maasai Boma in Tanzania, complete with a museum and overnight stay facilities. This immersive experience allows guests to learn about Maasai traditions, history, and lifestyle. Activities include guided village tours, cultural performances, and interactions with Maasai elders.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 74 km from Moshi | 85 km from Arusha</li>
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong>  Full-day tour</li>
                    </ul>
               </div>
          </div>
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/arusha-national-park.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Arusha National Park Day Trip
                    </h5>
                    <p style="text-align: justify">
                    Embark on a guided safari through Arusha National Park, home to stunning landscapes and diverse wildlife. Visit the Momela Lakes, known for their distinct colors and large flocks of flamingos, and explore the Ngurdoto Crater, formed 15 million years ago. Enjoy game drives in the morning and afternoon, with lunch at the Momela Wildlife Lodge.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 30 km from Arusha</li>
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong> Full-day safari</li>
                         <li><i class="fa fa-star me-2"></i><strong>Wildlife:</strong>  Buffalo, elephants, giraffes, warthogs, hippos, zebras, and rare leopards</li>
                    </ul>
               </div>
          </div>  
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/moshi-forest.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Moshi Forest Tour
                    </h5>
                    <p style="text-align: justify">
                    Explore the lush Moshi Forest, home to ancient Baobab trees and diverse wildlife. This guided walk includes visits to rice paddies, where visitors can learn about traditional rice farming methods. Lunch can be arranged upon request.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong> ~5 Hours</li>
                    </ul>
               </div>
          </div>  
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/cofee-tour.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Coffee Tour
                    </h5>
                    <p style="text-align: justify">
                    Tanzania has a rich coffee-growing history, and this tour provides insight into the coffee cultivation process. Engage with local farmers, learn about traditional processing techniques, and experience the full cycle of coffee production—from picking to roasting and grinding. The tour includes lunch and a chance to sample freshly brewed Tanzanian coffee.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 10–25 km from Moshi</li>
                         <li><i class="fa fa-clock me-2"></i><strong>Duration:</strong> 7 Full-day tour (~8 hours)</li>
                    </ul>
               </div>
          </div>  
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/chemka.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Chemka Hot Springs (Kikuletwa Hot Springs)
                    </h5>
                    <p style="text-align: justify">
                    Visit the mesmerizing Chemka Hot Springs, a hidden oasis with crystal-clear blue waters surrounded by lush vegetation. Enjoy swimming in the natural geothermal pools, relaxing under the shade of giant fig trees, or even camping overnight. Traditional Tanzanian meals, prepared by local women, add to the authentic experience.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-route me-2"></i><strong>Duration:</strong> Full-day tour (~8 hours)</li>
                         <li><i class="fa fa-star me-2"></i><strong>Activities:</strong> Swimming, picnicking, camping</li>
                    </ul>
               </div>
          </div>  
          <div class="col-lg-6 col-sm-12 shadow-sm p-4">
               <img class="img-fluid mb-3 w-100" style="border-radius:10px; width:100%;height:370px;" src="{{ asset('assets/frontend/img/tour/lake-chala.webp') }}" alt="me-2" />
               <div>
                    <h5 class="mb-3 text-uppercase" style="color:#f1671e!important">
                         <i class="fa fa-angle-double-right me-2"></i>
                         Lake Chala Excursion
                    </h5>
                    <p style="text-align: justify">
                    Lake Chala is a breathtaking crater lake fed by Mount Kilimanjaro’s underground streams. This hidden gem offers visitors a peaceful retreat away from crowded tourist spots. The Chala Hill walk, best done in the early morning, provides stunning 360° views of the surrounding landscapes, including Kenya’s border, Lake Jipe, and the vast Chala region.
                    </p>
                    <ul class="list-unstyled mt-3">
                         <li><i class="fa fa-route me-2"></i><strong>Distance:</strong> 30 km east of Moshi</li>
                         <li><i class="fa fa-route me-2"></i><strong>Duration:</strong> Full-day tour (~8 hours)</li>
                         <li><i class="fa fa-star me-2"></i><strong>Activities:</strong> Hiking, scenic walks, picnic lunch</li>
                    </ul>
               </div>
          </div>  
          <div class="col-lg-12 col-sm-12 p-4 mt-4">
              <div class="Acclimatization-list mb-4">
                  <div class="">
                      <h5 class="h6 text-muted py-3 text-uppercase">Why Choose These Day Trips?</h5>
                  </div>
                  <div class="">
                      <p>
                          ✅ Diverse Experiences: Wildlife safaris, cultural encounters, hiking, and relaxing getaways
                      </p>      
                      <p>
                          ✅ Professional Guides: Knowledgeable local guides ensure an immersive experience
                      </p>      
                      <p>
                          ✅ Customizable Options: Tailor the trips based on your interests and schedule
                      </p>  
                      <p>
                          ✅ Convenient Accessibility: All destinations are easily accessible from Moshi and Arusha
                      </p>      
                  </div>
              </div>  
          </div>       
        </div>
    </div>
</div>


@include('frontend.layouts.destinations')

@endsection