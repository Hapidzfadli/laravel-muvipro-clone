@extends('layouts.main')

@section('slider')
    @include('partials.slider')
@endsection

@section('container')
    <div class="content mb-4">
        <div class="trending">
            <p>Trending Now</p>
                <div class="row position-relative">
                  <div class="col-12">
                    <div class="card-slider">
                      <div class="card-deck">
                        <div class="card">
                          <a href="">
                            <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title">Avatar: The Way of Water</p>
                          </div>
                          </a>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/4F2QwCOYHJJjecSvdOjStuVLkpu.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title">Tetris</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/byYLhZLwKAMlLFVEcIH6LMOc5Us.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title">Inside</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5wpVy0KUWzDKDKgrayM0Q8lXOiK.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title">Murder Mystery 2</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/cvsXj3I9Q2iyyIo95AecSd1tad7.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title">Creed III</p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/qNBAXBIQlnOThrVvA6mA2B5ggV6.jpg" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-title">The Super Mario Bros. Movie</p>
                          </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
    
        
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
    
        
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
    
        
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/150x230.png" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-title">Card title</p>
                            </div>
                          </div>
                      </div>
                      
                    </div>
                  </div>
                  <button class="slick-prev"><i class="fas fa-chevron-left"></i></button>
                  <button class="slick-next"><i class="fas fa-chevron-right"></i></button>
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
    </script>
@endsection