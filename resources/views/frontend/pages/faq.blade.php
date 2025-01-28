@extends('frontend.layouts.app')
<style type="text/css">

</style>
@section('content')


<div class="container-xxl py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h1 class="h2">{{ $page_title }}</h1>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-sm-12 justify-content-center">                
                <div class="faq-container">
                    
                    <div class="faq-item">
                        <h3 class="text-muted">1. Where is Mount Kilimanjaro located?</h3>
                        <p>Mount Kilimanjaro is located in Tanzania, East Africa. It is near the border of Kenya, within Kilimanjaro National Park.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="text-muted">2. How tall is Mount Kilimanjaro?</h3>
                        <p>Mount Kilimanjaro stands at 5,895 meters (19,341 feet) above sea level, making it the highest peak in Africa and the tallest free-standing mountain in the world.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="text-muted">3. Do I need technical climbing experience to summit Kilimanjaro?</h3>
                        <p>No, Mount Kilimanjaro is a "walk-up" mountain, meaning it does not require technical climbing skills like rock climbing or the use of ropes. However, it is still a challenging trek due to the altitude.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="text-muted">4. What is the best time of year to climb Mount Kilimanjaro?</h3>
                        <p>The best time to climb Kilimanjaro is during the dry seasons: January to mid-March and June to October, when the weather is clearer and more stable.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="text-muted">5. How long does it take to climb Mount Kilimanjaro?</h3>
                        <p>Most routes take between 5 to 9 days. The longer the route, the more time you have to acclimatize to the altitude, increasing your chances of a successful summit.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection
