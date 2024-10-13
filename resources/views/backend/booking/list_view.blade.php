
<div class="row clearfix">
    <div class="col-md-12 col-lg-12">
        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
        @php $n=1; @endphp
        @if (!empty($data))
            @foreach ($data as $item)                
                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingTwo_{{ $item->tokens }}">
                        <h4 class="panel-title"> 
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_{{ $item->tokens }}" aria-expanded="false" aria-controls="collapseTwo_{{ $item->tokens }}"> 
                                #{{ $n }} <span class="badge badge-default m-l-10 hidden-md-down mr-1 p-2">{{ $item->name }}</span>
                                <span class="float-right text-primary mr-3">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y | H:m') }}</span>   
                            </a> 
                        </h4>
                    </div>
                    <div id="collapseTwo_{{ $item->tokens }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_{{ $item->tokens }}" style="">
                        <div class="panel-body"> 
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <br><p><strong class="mb-5">#ADDRESS</strong></p>
                                    <span>Phone : <a href="tel:+{{ $item->phone }}">{{ $item->phone }}</a></span><br>
                                    <span>Email : <a href="mailto:+{{ $item->email }}">{{ $item->email }}</a></span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <br><p><strong class="mb-5">#DATE</strong></p>
                                    <span>Arrival : <a href="javascript:(0)">{{ \Carbon\Carbon::parse($item->arrival_date)->format('d-m-Y') }}</a></span><br>
                                    <span>Departure : <a href="javascript:(0)">{{ \Carbon\Carbon::parse($item->departure_date)->format('d-m-Y') }}</a></span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <br><p><strong class="mb-5">#TRAVELERS</strong></p>
                                    <span>No. of adults : <a href="javascript:(0)">{{ $item->adults }}</a></span><br>
                                    <span>No. of children : <a href="javascript:(0)">{{ $item->children }}</a></span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <br><p><strong class="mb-5">#ACCOMMODATION</strong></p>
                                    <span>Package : <a href="javascript:(0)">{{ $item->title }} - ${{ number_format($item->cost) }}</a></span><br>
                                    <span>Accommodation : <a href="javascript:(0)">{{ $item->accommodation }}</a></span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                                    <button title="Delete Action" onclick="deleteBooking({{$item->id}})"  class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>                
            @php $n++; @endphp
            @endforeach
        @else
            <p>No data available</p>
        @endif
        </div>
    </div>
</div>

@include('backend.dependences.datatable')
