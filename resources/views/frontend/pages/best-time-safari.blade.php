@extends('frontend.layouts.app') 
@section('content')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-lg-12 col-sm-12 mb-4">
                <div class="gallery">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/mikumi6.jpg') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/bird4.webp') }}" alt="Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2a.jpeg') }}" alt=" Image">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/frontend/img/park/2b.jpeg') }}" alt="Image">
                    </div>
                </div>            
            </div>
        </div>

        <div class="row">
          <div class="col-lg-8 col-sm-12">
               <h5 class="text-muted">
                    Different seasons offer unique safari experiences. Here's a breakdown:
               </h5>
          </div>
          <div class="col-lg-4 col-sm-12">
               <a href="#bookingModal" class="btn btn-outline-primary px-5 text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">
               Book Now
               <i class="fa fa-arrow-right ms-3"></i>
               </a>
          </div>
          <div class="col-lg-12 col-sm-12 mt-4">
               <table>
                    <tr>
                         <th>Season</th>
                         <th>Months</th>
                         <th>Highlights</th>
                         <th>Weather/Conditions</th>
                    </tr>
                    <tr class="excellent">
                         <td>Dry Season</td>
                         <td>June - October</td>
                         <td>Best for game viewing, clear skies, and great photography.</td>
                         <td>Excellent</td>
                    </tr>
                    <tr class="fair">
                         <td>Wet Season</td>
                         <td>November - April</td>
                         <td>Lush landscapes, fewer tourists, and great birdwatching.</td>
                         <td>Fair</td>
                    </tr>
                    <tr class="good">
                         <td>Shoulder Season</td>
                         <td>May & November</td>
                         <td>Moderate weather, good wildlife viewing, fewer crowds.</td>
                         <td>Good</td>
                    </tr>
               </table>
          </div>
        </div>
    </div>
</div>



@include('frontend.layouts.destinations')

@endsection