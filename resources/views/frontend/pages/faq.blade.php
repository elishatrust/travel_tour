@extends('frontend.layouts.app')
<style type="text/css">
h1, h2 {
    text-align: center;
    color: #2c3e50;
}
.faq-container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
h1 {
    font-size: 36px;
    margin-bottom: 10px;
}
h2 {
    font-size: 28px;
    margin-bottom: 30px;
    color: #34495e;
}
.faq-item {
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding: 15px;
    background-color: #fafafa;
    border-radius: 6px;
}
.faq-item h3 {
    font-size: 20px;
    cursor: pointer;
    margin: 0;
    padding: 10px;
    background-color: #2c3e50;
    color: #fff;
    border-radius: 4px;
}
.faq-item p {
    display: none;
    font-size: 16px;
    margin: 10px 0;
    color: #555;
    padding: 0 10px;
}
.faq-item h3:after {
    content: "+";
    float: right;
    font-weight: bold;
    transition: all 0.3s;
}
.faq-item.open h3:after {
    content: "-";
}
.faq-item.open p {
    display: block;
}
@media (max-width: 768px) {
    h1 {
        font-size: 28px;
    }
    .faq-item h3 {
        font-size: 18px;
    }
    .faq-item p {
        font-size: 14px;
    }
}
</style>
@section('content')
@include('frontend.layouts.inc_terms_condition')


<div class="container-xxl py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <p style="color: #f1671e;" class="text-uppercase"><span class="text-primary me-2">#</span>FAQ</p>
                <h1 class="display-5123 h2 mb-3" style="">Frequently Asked Questions</h1>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-9 col-sm-12">                
                <div class="faq-container">

                    <h1>FAQ: Climbing Mount Kilimanjaro</h1>
                    <h2>Your Questions Answered</h2>
                    
                    <div class="faq-item">
                        <h3>1. Where is Mount Kilimanjaro located?</h3>
                        <p>Mount Kilimanjaro is located in Tanzania, East Africa. It is near the border of Kenya, within Kilimanjaro National Park.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3>2. How tall is Mount Kilimanjaro?</h3>
                        <p>Mount Kilimanjaro stands at 5,895 meters (19,341 feet) above sea level, making it the highest peak in Africa and the tallest free-standing mountain in the world.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3>3. Do I need technical climbing experience to summit Kilimanjaro?</h3>
                        <p>No, Mount Kilimanjaro is a "walk-up" mountain, meaning it does not require technical climbing skills like rock climbing or the use of ropes. However, it is still a challenging trek due to the altitude.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3>4. What is the best time of year to climb Mount Kilimanjaro?</h3>
                        <p>The best time to climb Kilimanjaro is during the dry seasons: January to mid-March and June to October, when the weather is clearer and more stable.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3>5. How long does it take to climb Mount Kilimanjaro?</h3>
                        <p>Most routes take between 5 to 9 days. The longer the route, the more time you have to acclimatize to the altitude, increasing your chances of a successful summit.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection
