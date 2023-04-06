<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($header as $item)
            @if($loop->first)
            <div class="carousel-item active">
                <img src="https://image.tmdb.org/t/p/original/{{$item['backdrop_path']}}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block ">
                    <div class="usia mb-2">{{$item['original_language']}}</div>              
                    <div class="rating mb-3">
                        <i class="fas fa-star"></i>
                        <span>{{$item['vote_average']}}</span>
                        <span>> • </span>
                        <span class="year">{{$item['release_date']}}</span>
                    </div>
                    <div class="mb-3">
                        <p class="letter-spaced">{{$item['title']}}</p>
                        <p class="deskripsi">
                            {{$item['overview']}}
                        </p>
                        <a href="/stream">
                            <button class="btn btn-watch">
                                <i class="fas fa-play"></i>
                                <span>Watch</span>
                            </button>
                        </a>
                    </div>
                </div>  
              </div>    
            @endif
            <div class="carousel-item">
                <img src="https://image.tmdb.org/t/p/original/{{$item['backdrop_path']}}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block ">
                    <div class="usia mb-2">{{$item['original_language']}}</div>              
                    <div class="rating mb-3">
                        <i class="fas fa-star"></i>
                        <span>{{$item['vote_average']}}</span>
                        <span>> • </span>
                        <span class="year">{{$item['release_date']}}</span>
                    </div>
                    <div class="mb-3">
                        <p class="letter-spaced">{{$item['title']}}</p>
                        <p class="deskripsi">
                            {{$item['overview']}}
                        </p>
                        <a href="/stream">
                            <button class="btn btn-watch">
                                <i class="fas fa-play"></i>
                                <span>Watch</span>
                            </button>
                        </a>
                    </div>
                </div>  
              </div>

        @endforeach
      
    </div>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
  