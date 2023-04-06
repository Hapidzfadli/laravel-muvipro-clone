@extends('layouts.main')

@section('container')
    <div class="">
        <div class="row gutter-2">
            <div class="col-12">
                <div class="stream">
                    <iframe width="100%" height="100%" height="315" src="//mixdrop.co/e/9nj9zkddu3nd7nw" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="content row">
                    <div class="col-lg-10 col-12 mb-3">
                        <div class="row position-relative">
                            <div class="col-2 image-post">
                                <div class="card">
                                    <img class="card-img-top" src="https://www.themoviedb.org/t/p/w440_and_h660_face/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col col-lg-9 detail-post position-relative">
                              <div class="player-btn position-absolute" style="right:0;">
                                <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </button> 
                                player <span class="player-number">1</span>
                                <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </button> 
                              </div>
                                <div class="rating mb-2">
                                    <i class="fas fa-star"></i>
                                    <span>8.5</span>
                                    <span class="mx-3">> • </span>
                                    <span class="year">2022</span>
                                    <span class="mx-3">> • </span>
                                    <div class="usia" style="font-size: 10px;">PG13+</div>   
                                </div>
                                <div class="judul-post mb-3">
                                    <h2 class="letter-spaced" style="font-size: 42px;">Avatar: The Way of Water</h2>
                                </div>
                                <div class="category-post mb-4 mx-0">
                                    <div class="d-flex gap-2">
                                        <a href="">
                                            <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Action</button> 
                                        </a> 
                                        <a href="">
                                          <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Science Fiction</button> 
                                        </a>
                                        <a href="">
                                          <button class="btn btn-outline-primary rounded-pill" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Adventure</button> 
                                        </a>
                                    </div>
                                </div>
                                <div class="reaction-post col-5" >
                                    <div class="d-flex justify-content-start gap-2">
                                        <button class="btn btn-watch">
                                            <i class="fas fa-play"></i>
                                            <span>Watch</span>
                                        </button>
                                        
                                        <button class="btn btn-outline-danger rounded-circle" style="border-width: 3px">
                                            <i class="fas fa-heart" style="padding: 0"></i>
                                        </button>
                                        <button class="btn btn-outline-primary rounded-circle" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">
                                            <i class="fas fa-share-alt " style="padding: 0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="deskripsi-post mt-4">
                                            <p style="font-size: 14px">Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col">
                                        <div class="row">
                                            <div class="col-6 col">
                                                <div class="cast-post mt-4 d-flex gap-4">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-circle mb-3" style="width: 70px;" alt="Avatar" /> 
                                                    <div class="card-name">
                                                        <h5 class="mb-2"><strong>John Doe</strong></h5>
                                                        <p class="text-muted">Web designer</p>         
                                                    </div>                          
                                                </div>
                                            </div>
                                            <div class="col-6 col">
                                                <div class="cast-post mt-4 d-flex gap-4">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-circle mb-3" style="width: 70px;" alt="Avatar" /> 
                                                    <div class="card-name">
                                                        <h5 class="mb-2"><strong>John Doe</strong></h5>
                                                        <p class="text-muted">Web designer</p>         
                                                    </div>                          
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col">
                                                <div class="cast-post mt-4 d-flex gap-4">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-circle mb-3" style="width: 70px;" alt="Avatar" /> 
                                                    <div class="card-name">
                                                        <h5 class="mb-2"><strong>John Doe</strong></h5>
                                                        <p class="text-muted">Web designer</p>         
                                                    </div>                          
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col">
                                                <div class="cast-post mt-4 d-flex gap-4">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-circle mb-3" style="width: 70px;" alt="Avatar" /> 
                                                    <div class="card-name">
                                                        <h5 class="mb-2"><strong>John Doe</strong></h5>
                                                        <p class="text-muted">Web designer</p>         
                                                    </div>                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row btn-download">
                                  <div class="col my-2">
                                    <a href="">
                                      <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Download 1</button> 
                                    </a>
                                  </div>
                                  <div class="col my-2">
                                    <a href="">
                                      <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Download 2</button> 
                                    </a>
                                  </div>
                                  <div class="col my-2">
                                    <a href="">
                                      <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Download 3</button> 
                                    </a>
                                  </div>
                                  <div class="col my-2">
                                    <a href="">
                                      <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Download 1</button> 
                                    </a>
                                  </div>
                                  <div class="col my-2">
                                    <a href="">
                                      <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Download 2</button> 
                                    </a>
                                  </div>
                                  <div class="col my-2">
                                    <a href="">
                                      <button class="btn btn-outline-primary rounded" style="background-color: transparent; border-color: rgba(30, 45, 160, 0.5); color:aqua;">Download 3</button> 
                                    </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col sidebar" >
                        <div class="side-single">
                            <h4 class="mb-3 letter-spaced" >Populer</h4>
                            <div class="side-post d-flex gap-4">
                                <img src="https://www.themoviedb.org/t/p/w440_and_h660_face/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg" class="rounded mb-3" style="width: 80px;" alt="Avatar" /> 
                                <div class="side-judul">
                                    <p style="font-size: 16px;">Avatar: The Way of Water</p>
                                    <p style="font-size: 14px; line-height: 16px;"><span class="side-category my-0">action, adventure</span><br>
                                        <span class="side-tahun my-0">2022</span></p>
                                </div>
                            </div>
                            <div class="side-post d-flex gap-4">
                                <img src="https://www.themoviedb.org/t/p/w440_and_h660_face/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg" class="rounded mb-3" style="width: 80px;" alt="Avatar" /> 
                                <div class="side-judul">
                                    <p style="font-size: 16px;">Avatar: The Way of Water</p>
                                    <p style="font-size: 14px; line-height: 16px;"><span class="side-category my-0">action, adventure</span><br>
                                        <span class="side-tahun my-0">2022</span></p>
                                </div>
                            </div>
                            <div class="side-post d-flex gap-4">
                                <img src="https://www.themoviedb.org/t/p/w440_and_h660_face/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg" class="rounded mb-3" style="width: 80px;" alt="Avatar" /> 
                                <div class="side-judul">
                                    <p style="font-size: 16px;">Avatar: The Way of Water</p>
                                    <p style="font-size: 14px; line-height: 16px;"><span class="side-category my-0">action, adventure</span><br>
                                        <span class="side-tahun my-0">2022</span></p>
                                </div>
                            </div>
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
    </script>
@endsection