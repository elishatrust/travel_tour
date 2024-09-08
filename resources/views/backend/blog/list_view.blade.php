
<div class="table-responsive">
    <table class="table table-hover m-b-0 c_list table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
        <thead>
            <tr>
                <th style="width: 5px;">#</th>
                <th style="width: 20px;">Title</th>
                <th style="width: 35px;">Content</th>
                <th style="width: 10px;">File</th>
                <th style="width: 15px;">Publisher</th>
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
                <td>
                    {{-- {{ $item->content }} --}}
                    @php
                        $content = $item->content;
                        $words = explode(' ', $content);
                        $firstTenWords = array_slice($words, 0, 10);
                        echo implode(' ', $firstTenWords);
                    @endphp
                </td>
                <td>
                    @if ($item->file_path)
                        <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank">View File</a>
                    @endif
                </td>
                <td>
                    <span>{{ $item->author }}</span>
                    <p class="mt-2">{{ \Carbon\Carbon::parse($item->published_at)->format('d-m-Y') }}</p>
                </td>
                <td>
                    @if (!empty($item->status==0))
                    <span class="badge badge-success m-l-10 hidden-sm-down">Active</span>
                    @else
                    <span class="badge badge-warning m-l-10 hidden-sm-down">Inactive</span>
                    @endif
                </td>
                <td>
                    <button title="Edit Action"  onclick="editWarehouse({{$item->id}})" class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                    <button title="Delete Action" onclick="deleteWarehouse({{$item->id}})"  class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                </td>
            </tr>
            @php $n++; @endphp
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.dependences.datatable')

