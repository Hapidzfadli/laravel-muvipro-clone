@extends('layouts.main') 

@section('container')
    <div class="content mt-4">
        <div class="row justify-content-center mt-5">
            @foreach ($posts as $item)    
            <div class="col-lg-5 col-12 mt-3">               
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                @if ($item->post_type == 'post')
                                <a href="/{{$item->post_name}}">
                                @elseif($item->post_type == 'tv')
                                <a href="/tv/{{$item->post_name}}">
                                @endif
                                <img class="card-img-top" rel="noopener noreferrer" src="{{$item->meta_value}}"></a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="judul">
                                @if ($item->post_type == 'post')
                    <a href="/{{$item->post_name}}">
                    @elseif($item->post_type == 'tv')
                    <a href="/tv/{{$item->post_name}}">
                    @endif
                    <h4 class="letter-spaced">{{$item->post_title}}</h4></a>
                                <p style="font-size: 12px">{!!
                                substr( str_replace("Nonton Film $item->post_title Sub Indo Full Movie Streaming Online Sinopsis – ", "", $item->post_content), 0 , 150) . "..."
                                !!}</p>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
            
        </div>
        <div class="d-flex justify-center mt-5">
            <div class="pagination" style="width: 100vw">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection