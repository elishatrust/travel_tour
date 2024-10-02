@foreach ($data as $item)
<div class="col-lg-6 col-md-6 col-sm-12 right-box">
    <div class="card widget123 popular-post123">
        <div class="body">
            <div class="single_post">
                <a href="javascript:(0)">
                    <div class="img-post m-b-5">
                        @if (!empty($item->file_path))
                        <img src="{{ asset('assets/frontend/img/Lion_Serengeti.webp') }}" class="w-100 h-auto rounded" alt="Awesome Image">                                                                                                    
                        @else
                        <img src="{{ asset('assets/frontend/img/Lion_Serengeti.webp') }}" class="w-100 h-auto rounded" alt="Awesome Image">                                            
                        @endif
                    </div>
                    <b class="text-dark py-3">{{ $item->title }}</b><hr>
                    <p class="my-2 text-justify">
                        {{-- {{ $item->content }} --}}
                        @php
                            $text = $item->content;
                            $words = explode(' ', $text);
                            $firstTenWords = array_slice($words, 0, 50);
                            echo implode(' ', $firstTenWords);
                        @endphp 
                    </p>
                    <div style="justify-content:space-between; display:flex">
                        <div class="">
                            <small class="text-muted">{{ \Carbon\Carbon::parse($item->published_at)->format('M d, Y') }}</small><br>
                            @if (!empty($item->status==0))
                            <span class="badge badge-success hidden-sm-down">Active</span>
                            @else
                            <span class="badge badge-warning hidden-sm-down">Inactive</span>
                            @endif
                        </div>
                        <div class="social_share">      
                            <button title="Edit Action"  onclick="editBlog({{ $item->id }})" class="btn btn-icon btn-neutral btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                            <button title="Delete Action" onclick="deleteBlog({{ $item->id }})"  class="btn btn-icon btn-neutral btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button> 
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div> 
</div>
@endforeach


@include('backend.dependences.datatable')

