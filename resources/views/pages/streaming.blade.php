@extends('layouts.main')

@section('container')
    <div class="">
        <div class="row gutter-2">
            <div class="col-12">
                <div class="stream" id="streaming">
                  @if($post['post_type'] == "post")
                    @if(isset($post['meta_post']['IDMUVICORE_Player1'])){!! $post['meta_post']['IDMUVICORE_Player1']!!} @endif 
                  @elseif($post['post_type'] == "tv")
                    @if(isset($post['meta_post']['IDMUVICORE_Trailer']))
                    <iframe src="https://www.youtube.com/embed/{{$post['meta_post']['IDMUVICORE_Trailer']}}" title="{{$post['post_title']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    @endif 
                  @else
                      
                  @endif
              
                    
                </div>

                <div class="content row">
                    <div class="col-lg-10 col-12 mb-3">
                      
                        <div class="row position-relative">
                            <div class="col-2 image-post">
                                <div class="card">
                                    <img class="card-img-top" src="@if(isset($post['meta_post']['IDMUVICORE_Poster'])){{$post['meta_post']['IDMUVICORE_Poster']}} @endif" alt="{{$post['post_title']}}">
                                </div>
                            </div>
                            <div class="col col-lg-9 detail-post position-relative">
                              
                                
                                <div class="episode d-flex gap-2">
                                  @if($post['post_type'] == "tv")
                                    @foreach ($episode as $item)
                                      <button class="btn mb-3 btn-eps  btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">EPS <span class="{{ $item->post_id }}">{{$item->meta_value}}</span>
                                      </button> 
                                    @endforeach
                                  @endif
                                  @if ($post['post_type'] == "post")
                                    <div class="player-btn position-absolute" style="right:0;">
                                      <button class="btn ply-back btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                      </button> 
                                      player <span class="player-number">1</span>
                                      <button class="btn ply-next btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                      </button> 
                                    </div>
                                  @endif
                                  
                                </div>
                               
                              
                              
                                <div class="rating mb-2">
                                    <i class="fas fa-star"></i>
                                    <span>@if(isset($post['meta_post']['IDMUVICORE_tmdbRating'])){{$post['meta_post']['IDMUVICORE_tmdbRating']}} @endif</span>
                                    <span class="mx-1">> • </span>
                                    <span class="year">@if(isset($post['meta_post']['IDMUVICORE_Released'])){{$post['meta_post']['IDMUVICORE_Released']}} @endif</span>
                                    <span class="mx-1">> • </span>
                                    <div class="usia" style="font-size: 10px;">@if(isset($post['meta_post']['IDMUVICORE_Runtime'])){{$post['meta_post']['IDMUVICORE_Runtime']}} @endif min</div>   
                                </div>
                                <div class="judul-post mb-3">
                                    <h2 class="letter-spaced" style="font-size: 36px;">{{$post['post_title']}}</h2>
                                </div>
                                <div class="category-post mb-4 mx-0">
                                    <div class="d-flex gap-2">
                                      @if(isset($post['category']))
                                        @foreach ($post['category']->take(2) as $item)
                                          <a href="/category/{{$item}}">
                                            <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$item}}</button> 
                                          </a> 
                                        @endforeach
                                      @endif
                                      @if(isset($post['muvicountry']))
                                        @foreach ($post['muvicountry'] as $item)
                                          <a href="/muvicountry/{{$item}}">
                                            <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$item}}</button> 
                                          </a> 
                                        @endforeach
                                      @endif
                                    </div>
                                </div>
                                <div class="reaction-post col-5" >
                                    <div class="d-flex justify-content-start gap-2">
                                        <a href="#streaming">
                                          <button class="btn btn-watch">
                                            <i class="fas fa-play"></i>
                                            <span>Watch</span>
                                        </button>
                                        </a>
                                        
                                        <button class="btn btn-outline-danger rounded-circle d-flex justify-content-center align-content-center align-items-center" style="border-width: 3px">
                                            <i class="fas fa-heart" style="padding: 0"></i>
                                        </button>
                                        <button class="btn btn-outline-primary rounded-circle d-flex justify-content-center align-content-center align-items-center" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">
                                            <i class="fas fa-share-alt " style="padding: 0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="deskripsi-post mt-4">
                                            <p>{!!$post['post_content']!!}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col">
                                        <div class="row">
                                          @if(isset($post['muvicast']))
                                            @foreach ($post['muvicast'] as $item)
                                              <div class="col-6 col">
                                                  <div class="cast-post mt-2 d-flex gap-4">
                                                      <img src="https://arjuna-mc.site/img/man.png" class="rounded-circle mb-2" style="width: 50px; height: 50px;" alt="Avatar" /> 
                                                      <div class="card-name">
                                                          <h5 style="font-size: 14px;"  class="mb-2"><strong>{{$item}}</strong></h5>
                                                          <p class="text-muted">Cast</p>         
                                                      </div>                          
                                                  </div>
                                              </div> 
                                            @endforeach
                                          @endif
                                          @if(isset($post['muvidirector']))
                                          <div class="col-6 col">
                                            <div class="cast-post mt-2 d-flex gap-4">
                                                <img src="https://arjuna-mc.site/img/man1.png" class="rounded-circle mb-3" style="width: 50px; height: 50px;" alt="Avatar" /> 
                                                <div class="card-name">
                                                    <h5 style="font-size: 14px;" class="mb-2"><strong>{{$post['muvidirector']}}</strong></h5>
                                                    <p class="text-muted">Director</p>         
                                                </div>                          
                                            </div>
                                          </div> 
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row btn-download">
                                  @if(isset($post['meta_post']['IDMUVICORE_Download1']))
                                    <div class="col my-2">
                                        <a href="{{$post['meta_post']['IDMUVICORE_Download1']}}" target="_blank">
                                            <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$post['meta_post']['IDMUVICORE_Title_Download1']}}</button> 
                                        </a>
                                    </div>
                                  @endif
                                  @if(isset($post['meta_post']['IDMUVICORE_Download2']))
                                  <div class="col my-2">
                                    <a href="{{$post['meta_post']['IDMUVICORE_Download2']}}" target="_blank">
                                        <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$post['meta_post']['IDMUVICORE_Title_Download2']}}</button> 
                                    </a>
                                </div>
                                  @endif
                                  @if(isset($post['meta_post']['IDMUVICORE_Download3']))
                                    <div class="col my-2">
                                        <a href="{{$post['meta_post']['IDMUVICORE_Download3']}}" target="_blank">
                                            <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$post['meta_post']['IDMUVICORE_Title_Download3']}}</button> 
                                        </a>
                                    </div>
                                  @endif
                                  @if(isset($post['meta_post']['IDMUVICORE_Download4']))
                                    <div class="col my-2">
                                        <a href="{{$post['meta_post']['IDMUVICORE_Download4']}}" target="_blank">
                                            <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$post['meta_post']['IDMUVICORE_Title_Download4']}}</button> 
                                        </a>
                                    </div>
                                  @endif
                                  @if(isset($post['meta_post']['IDMUVICORE_Download5']))
                                    <div class="col my-2">
                                        <a href="{{$post['meta_post']['IDMUVICORE_Download5']}}" target="_blank">
                                            <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$post['meta_post']['IDMUVICORE_Title_Download5']}}</button> 
                                        </a>
                                    </div>
                                  @endif
                                  @if(isset($post['meta_post']['IDMUVICORE_Download6']))
                                    <div class="col my-2">
                                        <a href="{{$post['meta_post']['IDMUVICORE_Download6']}}" target="_blank">
                                            <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">{{$post['meta_post']['IDMUVICORE_Title_Download6']}}</button> 
                                        </a>
                                    </div>
                                  @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col sidebar" >
                        <div class="side-single">
                            <h4 class="mb-3 letter-spaced" >Populer</h4>
                            @foreach ($popular as $item)
                              <a href="/{{$item->post_name}}">
                                <div class="side-post d-flex gap-4">
                                  <img src="{{$item->meta_value}}" class="rounded mb-3" style="width: 80px;" alt="{{$item->post_title}}" /> 
                                  <div class="side-judul">
                                      <p style="font-size: 14px;">{{$item->post_title}}</p>
                                      {{-- <p style="font-size: 14px; line-height: 16px;"><span class="side-category my-0">action, adventure</span><br>
                                          <span class="side-tahun my-0">2022</span></p> --}}
                                  </div>
                                </div>
                              </a>
                            @endforeach
                            
                        </div>
                    </div>
                </div>

                <div class=" content single-rekomend">
                    <div class="title">
                        <h3>More Like This</h3>
                        <div class="row position-relative">
                            <div class="col-12">
                              <div class="card-slider">
                                <div class="card-deck">
                                  @foreach ($rekomendasi as $item)
                                    <div class="card">
                                      @if ($item->post_type == 'post')
                                        <a href="/{{$item->post_name}}">
                                      @elseif($item->post_type == 'tv')
                                        <a href="/tv/{{$item->post_name}}">
                                      @endif
                                        <img class="card-img-top" data-src="{{$item->meta_value}}"  src="{{$item->meta_value}}" class="lazyload" alt="{{$item->post_title}}">
                                      <div class="card-body">
                                        <p class="card-title">{{$item->post_title}}</p>
                                      </div>
                                      </a>
                                    </div>
                                  @endforeach
                                </div>
                                
                              </div>
                            </div>
                            <button class="slick-prev"><i class="fas fa-chevron-left"></i></button>
                            <button class="slick-next"><i class="fas fa-chevron-right"></i></button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
        $('.card-deck').slick({
            slidesToShow: 9,
            slidesToScroll: 1,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
            responsive: [
                {
        breakpoint: 300, // untuk ukuran layar 300px ke atas
        settings: {
            slidesToShow: 2
        }
        },
        {
        breakpoint: 768, // untuk ukuran layar 768px ke atas
        settings: {
            slidesToShow: 3
        }
        },
        
        {
        breakpoint: 992, // untuk ukuran layar 992px ke atas
        settings: {
            slidesToShow: 5
        }
        },
        {
        breakpoint: 1200, // untuk ukuran layar 1200px ke atas
        settings: {
            slidesToShow: 7
        }
        }
    ]
        });
        });


        //player
        $(document).ready(function() {
            $('.ply-back').click(function() {
                let spanVal = $('.player-number').text()
                let intVal = parseInt(spanVal)
                
                if(intVal == 2) {
                  iframe = '@if(isset($post["meta_post"]["IDMUVICORE_Player1"])){!! $post["meta_post"]["IDMUVICORE_Player1"]!!} @endif'
                } else if(intVal == 3) {
                  iframe = '@if(isset($post["meta_post"]["IDMUVICORE_Player2"])){!! $post["meta_post"]["IDMUVICORE_Player2"]!!} @endif'
                }
                if(intVal > 1) {
                    $('.player-number').text(intVal)
                    $('#streaming').html(iframe)
                }
                intVal--
                
            });
            $('.ply-next').click(function() {
                let spanVal = $('.player-number').text()
                let intVal = parseInt(spanVal)
                let iframe = ''
                
                if(intVal == 1) {
                  iframe = '@if(isset($post["meta_post"]["IDMUVICORE_Player2"])){!! $post["meta_post"]["IDMUVICORE_Player2"]!!} @endif'
                } else if(intVal == 2) {
                  iframe = '@if(isset($post["meta_post"]["IDMUVICORE_Player3"])){!! $post["meta_post"]["IDMUVICORE_Player3"]!!} @endif'
                }
                
                if(intVal <= 3) {
                  $('.player-number').text(intVal)
                  $('#streaming').html(iframe)
                }
                intVal++
            });
            $('.btn-eps').click(function(){
              var id = $(this).find('span').attr('class');
              $.ajax({
                  url: '{{ route("ajax") }}',
                  type: 'POST',
                  dataType: 'json',
                  data: {post_id: id, _token: '{{csrf_token()}}'},
                  success: function(response) {
                    $('.btn-download').find('div').remove()
                    if (response.hasOwnProperty('IDMUVICORE_Player1')) {
                        $('#streaming').html(response.IDMUVICORE_Player1)
                    }
                    if (response.hasOwnProperty('IDMUVICORE_Download1')) {
                        
                        var btn = '<div class="col my-2"><a target="_blank" href="'+response.IDMUVICORE_Download1+'"><button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">'+response.IDMUVICORE_Title_Download1+'</button> </a></div>'
                        $('.btn-download').append(btn)
                    }
                    if (response.hasOwnProperty('IDMUVICORE_Download2')) {

                        var btn = '<div class="col my-2"><a target="_blank" href="'+response.IDMUVICORE_Download2+'"><button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">'+response.IDMUVICORE_Title_Download2+'</button> </a></div>'
                        $('.btn-download').append(btn)
                    }
                    if (response.hasOwnProperty('IDMUVICORE_Download3')) {

                        var btn = '<div class="col my-2"><a target="_blank" href="'+response.IDMUVICORE_Download3+'"><button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">'+response.IDMUVICORE_Title_Download3+'</button> </a></div>'
                        $('.btn-download').append(btn)
                    }
                    if (response.hasOwnProperty('IDMUVICORE_Download4')) {
                        var btn = '<div class="col my-2"><a target="_blank" href="'+response.IDMUVICORE_Download4+'"><button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">'+response.IDMUVICORE_Title_Download4+'</button> </a></div>'
                        $('.btn-download').append(btn)
                    }
                    if (response.hasOwnProperty('IDMUVICORE_Download5')) {
                        var btn = '<div class="col my-2"><a href="'+response.IDMUVICORE_Download5+'"><button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">'+response.IDMUVICORE_Title_Download5+'</button> </a></div>'
                        $('.btn-download').append(btn)
                    }
                    if (response.hasOwnProperty('IDMUVICORE_Download6')) {
                        var btn = '<div class="col my-2"><a target="_blank" href="'+response.IDMUVICORE_Download6+'"><button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">'+response.IDMUVICORE_Title_Download6+'</button> </a></div>'
                        $('.btn-download').append(btn)
                    }
                     
                  },
                  error: function(xhr) {
                      console.log(xhr.responseText);
                  }
              });
            });
        });
    </script>
@endsection