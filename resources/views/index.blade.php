@extends('layouts.main')

@section('slider')
    @include('partials.slider')
@endsection

@section('container')
    <div class="content mb-4">
      <div class="my-4">
        <p>Trending</p>
        <div class="row position-relative">
          <div class="col-12">
            <div class="card-slider">
              <div class="card-deck trending">
                @foreach ($trending as $item)
                  <div class="card">
                    <a href="">
                      <img class="card-img-top" data-src="{{$item->meta_value}}" src="{{$item->meta_value}}" class="lazyload" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-title">{{$item->post_title}}</p>
                    </div>
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-4">
        <p>Tv Show</p>
        <div class="row position-relative">
          <div class="col-12">
            <div class="card-slider">
              <div class="card-deck tvshow">
                @foreach ($tvshow as $item)
                  <div class="card">
                    <a href="">
                      <img class="card-img-top" data-src="{{$item->meta_value}}" src="{{$item->meta_value}}" class="lazyload" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-title">{{$item->post_title}}</p>
                    </div>
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="my-4">
          <p>Action</p>
          <div class="row position-relative">
            <div class="col-12">
              <div class="card-slider">
                <div class="card-deck actions">
                  @foreach ($actions as $action)
                    <div class="card">
                      <a href="">
                        <img class="card-img-top" data-src="{{$action->meta_value}}" src="{{$action->meta_value}}" class="lazyload" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-title">{{$action->post_title}}</p>
                      </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-4">
          <p>Adventure</p>
          <div class="row position-relative">
            <div class="col-12">
              <div class="card-slider">
                <div class="card-deck adventures">
                  @foreach ($adventures as $adventure)
                    <div class="card">
                      <a href="">
                        <img class="card-img-top" data-src="{{$adventure->meta_value}}" src="{{$adventure->meta_value}}" class="lazyload" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-title">{{$adventure->post_title}}</p>
                      </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="my-4">
          <p>Horror</p>
          <div class="row position-relative">
            <div class="col-12">
              <div class="card-slider">
                <div class="card-deck horror">
                  @foreach ($horror as $item)
                    <div class="card">
                      <a href="">
                        <img class="card-img-top" data-src="{{$item->meta_value}}"  src="{{$item->meta_value}}" class="lazyload" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-title">{{$item->post_title}}</p>
                      </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-4">
          <p>Comedy</p>
          <div class="row position-relative">
            <div class="col-12">
              <div class="card-slider">
                <div class="card-deck comedy">
                  @foreach ($comedy as $item)
                    <div class="card">
                      <a href="">
                        <img class="card-img-top" data-src="{{$item->meta_value}}" src="{{$item->meta_value}}" class="lazyload" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-title">{{$item->post_title}}</p>
                      </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" my-4">
          <p>Drama</p>
          <div class="row position-relative">
            <div class="col-12">
              <div class="card-slider">
                <div class="card-deck drama">
                  @foreach ($drama as $item)
                    <div class="card">
                      <a href="">
                        <img class="card-img-top" data-src="{{$item->meta_value}}" src="{{$item->meta_value}}" class="lazyload" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-title">{{$item->post_title}}</p>
                      </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </div>
    <script>
        $(document).ready(function(){
        $('.actions').slick({
            slidesToShow: 9,
            lazyLoad: 'ondemand',
            slidesToScroll: 1,
            
            
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
        $('.tvshow').slick({
            slidesToShow: 9,
            lazyLoad: 'ondemand',
            slidesToScroll: 1,
            
            
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
        $('.trending').slick({
            slidesToShow: 9,
            lazyLoad: 'ondemand',
            slidesToScroll: 1,
            
            
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
        $('.comedy').slick({
            slidesToShow: 9,
            slidesToScroll: 1,
            
            
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
        $('.horror').slick({
            slidesToShow: 9,
            slidesToScroll: 1,
            
            
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
        $('.drama').slick({
            slidesToShow: 9,
            slidesToScroll: 1,
            
            
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
        $('.adventures').slick({
            slidesToShow: 9,
            slidesToScroll: 1,
            
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
    </script>
@endsection