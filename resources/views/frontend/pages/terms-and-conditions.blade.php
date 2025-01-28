@extends('frontend.layouts.app')
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
                <div class="terms-container">

                    <p class="mb-3"><strong>Last Updated:</strong> [{{ date('Y') }}]</p>

                    <div id="booking-payments" class="pb-3">
                        <h3 class="text-muted">1. Booking and Payments</h3>
                        <h5 class="text-muted">1.1. Reservations</h5>
                        <p>A booking is confirmed when you receive written confirmation from the Company. We reserve the right to refuse any booking at our discretion.</p>

                        <h5 class="text-muted">1.2. Payment Terms</h5>
                        <p>A deposit of [insert %] is required at the time of booking to secure your reservation. Full payment must be made [insert number of days] days before the departure date.</p>

                        <h5 class="text-muted">1.3. Late Payments</h5>
                        <p>If full payment is not received by the specified deadline, we reserve the right to cancel your booking without refund.</p>
                    </div>

                    <div id="cancellation-refund" class="pb-3">
                        <h3 class="text-muted">2. Cancellation and Refund Policy</h3>
                        <h5 class="text-muted">2.1. Cancellation by the Customer</h5>
                        <p>If you need to cancel your booking, the following fees apply: 
                            - Cancellation [insert number] days before: [insert %] refund.
                            - Less than [insert number] days: no refund.
                        </p>

                        <h5 class="text-muted">2.2. Cancellation by the Company</h5>
                        <p>We reserve the right to cancel a tour due to unforeseen circumstances. In such cases, you can reschedule or receive a full refund.</p>
                    </div>

                    <div id="changes" class="pb-3">
                        <h3 class="text-muted">3. Changes to Booking</h3>
                        <h5 class="text-muted">3.1. Changes by the Customer</h5>
                        <p>If you wish to make changes to your booking, it may be subject to availability and additional fees.</p>

                        <h5 class="text-muted">3.2. Changes by the Company</h5>
                        <p>We reserve the right to make minor adjustments to accommodations, transportation, or activities.</p>
                    </div>

                    <div id="insurance" class="pb-3">
                        <h3 class="text-muted">4. Travel Insurance</h3>
                        <p>Travel insurance is recommended and should be purchased by the customer. The Company is not liable for costs incurred due to cancellations, medical emergencies, or lost baggage.</p>
                    </div>

                    <div id="visa-health" class="pb-3">
                        <h3 class="text-muted">5. Passports, Visas, and Health Requirements</h3>
                        <h5 class="text-muted">5.1. Customer Responsibility</h5>
                        <p>It is the customer’s responsibility to ensure all necessary travel documents are valid.</p>

                        <h5 class="text-muted">5.2. Health Precautions</h5>
                        <p>Customers must obtain necessary vaccinations or medical advice for the destination.</p>
                    </div>

                    <div id="liability" class="pb-3">
                        <h3 class="text-muted">6. Liability and Force Majeure</h3>
                        <h5 class="text-muted">6.1. Company Liability</h5>
                        <p>The Company is not liable for damages arising from the use of our services. Liability is limited to the value of the services booked.</p>

                        <h5 class="text-muted">6.2. Force Majeure</h5>
                        <p>We are not responsible for delays due to events beyond our control, such as natural disasters or political unrest.</p>
                    </div>

                    <div id="behavior" class="pb-3">
                        <h3 class="text-muted">7. Behavior and Conduct</h3>
                        <p>Customers must behave respectfully and abide by local laws. We reserve the right to terminate services for inappropriate conduct.</p>
                    </div>

                    <div id="services" class="pb-3">
                        <h3 class="text-muted">8. Use of Services</h3>
                        <h5 class="text-muted">8.1. Animal Photography, Playgrounds, and Zoo Shopping</h5>
                        <p>The Company is not liable for injuries during activities like animal photography or shopping at zoos.</p>

                        <h5 class="text-muted">8.2. Rest House and Wi-Fi</h5>
                        <p>Wi-Fi and rest house accommodations are subject to availability.</p>
                    </div>

                    <div id="complaints" class="pb-3">
                        <h3 class="text-muted">9. Complaints and Dispute Resolution</h3>
                        <h5 class="text-muted">9.1. Complaints</h5>
                        <p>If you have a complaint, notify our guide or representative immediately. Submit complaints in writing within 30 days after the trip.</p>

                        <h5 class="text-muted">9.2. Governing Law</h5>
                        <p>This agreement is governed by the laws of [Insert Country] and disputes are subject to the courts of [Insert Location].</p>
                    </div>

                    <div id="privacy" class="pb-3">
                        <h3 class="text-muted">10. Privacy Policy</h3>
                        <p>Your personal information will be used solely for booking purposes and will not be shared with third parties unless necessary.</p>
                    </div>

                    <div id="additional-services" class="pb-3">
                        <h3 class="text-muted">11. Additional Services</h3>
                        <h5 class="text-muted">11.1. Food & Beverages</h5>
                        <p>Dietary requirements should be communicated in advance, though we cannot guarantee all preferences can be accommodated.</p>

                        <h5 class="text-muted">11.2. Car Parking</h5>
                        <p>Car parking is offered at select locations and is subject to availability.</p>

                        <h5 class="text-muted">11.3. Guide Services</h5>
                        <p>We provide guides for select tours. The Company is not liable for errors in information provided by guides.</p>
                    </div>

                    <div id="amendments" class="pb-3">
                        <h3 class="text-muted">12. Amendments</h3>
                        <p>We reserve the right to update or modify these Terms and Conditions at any time. Please check our website for the latest version.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
