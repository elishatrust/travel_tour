<?php
use App\Models\User;
use App\Models\ZInventory;

$userinfo = new User();
$inventoryinfo = new ZInventory();

?>

@extends('layout.app')
<!-- Main Content -->
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Geographical Mapping Details</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Geographical Mapping Details</li>
                    </ul>
                </div>

            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- <div class="card">
                    <div class="header">
                        <h2><strong>Geographical Mapping Details</h2>

                    </div>
                    <div class="body">
    
                    </div>
                </div> -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <address>
                                            <strong>Full Name : {{ $userinfo->userFullName($mapping->user_id) }}</strong><br>
                                            Phone Number: {{ $userinfo->userPhone($mapping->user_id) }}<br>
                                            Assigned Location: <strong>{{ $village->name }}</strong><br>
                                            Description: {{ $mapping->description }}<br>
                                            <!-- <abbr title="Phone">P:</abbr> (123) 456-34636 -->
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        <p class="m-b-0"><strong>Created Date: </strong> {{ \Carbon\Carbon::parse($mapping->created_at)->format('d, M, Y') }}</p>
                                        <!-- <p class="m-b-0"><strong>Order Status: </strong> <span class="badge badge-warning m-b-0">Pending</span></p>
                                        <p><strong>Order ID: </strong> #123456</p> -->
                                    </div>
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Inventory Name</th>
                                                    <th>Quantity</th>
                                                    <th class="hidden-sm-down">Unit Cost</th>
                                                    <th class="hidden-sm-down">Created At</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $num = 0;
                                                $subtotal = 0;
                                                @endphp
                                        
                                                @foreach($inventory as $invtry)
                                                @php
                                                $num++;
                                                $unitCost = $inventoryinfo->getInventoryBatchPrice($invtry->inventory_id);
                                                $total = $invtry->quantity * $unitCost;
                                                $subtotal += $total;
                                                @endphp
                                        
                                                <tr>
                                                    <td>{{ $num }}</td>
                                                    <td>{{ $inventoryinfo->getInventoryName($invtry->inventory_id) }}</td>
                                                    <td>{{ $invtry->quantity }}</td>
                                                    <td class="hidden-sm-down">TZS {{ $unitCost }}</td>
                                                    <td class="hidden-sm-down">{{ \Carbon\Carbon::parse($invtry->created_at)->format('d, M, Y') }}</td>
                                                    <td>TZS {{ $total }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5></h5>
                                        <p></p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p class="m-b-0"><b>Sub-total:</b> TZS {{ number_format($subtotal, 2) }}</p>
                                        <!-- <p class="m-b-0">Discout: 12.9%</p>
                                        <p class="m-b-0">VAT: 12.9%</p>                                         -->
                                        <h3 class="m-b-0 m-t-10">TZS {{ number_format($subtotal, 2) }}</h3>
                                    </div>                                    
                                    <!-- <div class="hidden-print col-md-12 text-right">
                                        <hr>
                                        <button class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i class="zmdi zmdi-print"></i></button>
                                        <button class="btn btn-primary btn-round">Submit</button>
                                    </div> -->
                                </div>                                
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
</section>
   
@endsection