
<div class="table-responsive">
    <table class="table table-hover m-b-0 c_list table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Status</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $n=1; @endphp
            @foreach ($data as $item)
            <tr>
                <td>{{ $n }}</td>
                <td>{{ $item->fullname }}</td>
                <td><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></td>
                <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
                <td>
                    @if (!empty($item->status==0))
                    <span class="badge badge-success m-l-10 hidden-sm-down">New</span>
                    @else
                    <span class="badge badge-default m-l-10 hidden-sm-down"></span>
                    @endif
                </td>
                <td>
                    <p class="mt-2">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y | H:m') }}</p>
                </td>
                <td>
                    <button title="Edit Action"  onclick="editContact({{$item->id}})" class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                    <button title="Delete Action" onclick="deleteContact({{$item->id}})"  class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                </td>
            </tr>
            @php $n++; @endphp
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.dependences.datatable')

