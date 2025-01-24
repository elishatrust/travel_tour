@extends('frontend.layouts.app')
@section('content')
{{-- @include('frontend.layouts.inc_mt_kili') --}}


@php
use App\Models\PackageModel;
$packages = PackageModel::getPackage();
@endphp


<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2 mb-3">{{ $page_title }}</h1>
                <hr>
            </div>
            <div class="col-md-8 col-sm-12">                
                <div class="form shadow-sm p-3">
                    <form class="form" id="form" action="javascript:void(0)"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" >
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail address" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="date">Arrival Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="date">Departure Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="departure_date" name="departure_date" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="travelers">Travelers (Adult)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="adults" name="adults" min="1" placeholder="Number of adults" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label class="fw-bold" for="travelers">Travelers (Child)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="children" name="children" min="0" placeholder="Number of children" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="fw-bold" for="accommodation">Accommodation <span class="text-danger">*</span> </label>
                                    <select class="form-select" id="accommodation" name="accommodation" required>
                                        <option value="">Select--</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Resort">Resort</option>
                                        <option value="GuestHouse">GuestHouse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="fw-bold" for="package">Packages <span class="text-danger">*</span> </label>
                                    <select class="form-select" id="package" name="package" required>
                                        <option value="">Select--</option>
                                        @if (!empty( $packages))
                                            @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->title }}</option>                                                
                                            @endforeach                                            
                                        @else
                                            <option value="">No option</option>                                            
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3" id="package_cost">
                                <div class="form-group">
                                    <label class="fw-bold" for="package">Cost ($)<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="cost" id="cost" value="" placeholder="Package cost" readonly>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 mb-3" id="loader">
                                <img src="{{ asset('assets/backend/loader.svg') }}" alt="Loading.." class="">
                            </div>
                            <div class="col-md-12 col-sm-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                                    <label class="form-check-label" for="agree">I agree to the I agree to the <a href="{{ route('terms-and-conditions') }}">terms and conditions</a>.</label>
                                </div>
                            </div>
                            <div id="msg_notification" class="col-md-12.col-sm-12 d-flex justify-content-center align-items-center" >
                                <img src="{{ asset('assets/backend/loader.svg') }}" alt="Loading...">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary px-5">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('frontend.layouts.destinations')

@endsection