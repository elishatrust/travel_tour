
<div class="table-responsive">
    <table class="table table-hover m-b-0 c_list table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
        <thead>
            <tr>
                <th style="width: 5px;">#</th>
                <th style="width: 20px;">Package</th>
                <th style="width: 10px;">Cost($)</th>
                <th style="width: 35px;">Travelers</th>
                <th style="width: 15px;">Extra</th>
                <th style="width: 15px;">Order No.</th>
                <th style="width: 10px;">Status</th>
                <th style="width: 5px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $n=1; @endphp
            @foreach ($data as $item)
            <tr>
                <td>{{ $n }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->cost }}</td>
                <td>
                    <span>Adult : {{ $item->adult ? $item->adult : '0'  }}</span>, 
                    <span>Child : {{ $item->child ? $item->child : '0' }}</span>                  
                </td>
                <td>{{ $item->more }}</td>
                <td>{{ $item->order_number }}</td>
                <td>
                    @if (!empty($item->status==0))
                    <span class="badge badge-success m-l-10 hidden-sm-down">Active</span>
                    @else
                    <span class="badge badge-warning m-l-10 hidden-sm-down">Inactive</span>
                    @endif
                </td>
                <td>
                    <button title="Edit Action"  onclick="editPackage({{$item->id}})" class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                    <button title="Delete Action" onclick="deletePackage({{$item->id}})"  class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                </td>
            </tr>
            @php $n++; @endphp
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.dependences.datatable')

