<nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">Indoseries</a>
    
    <div class="collapse navbar-collapse ml-lg-1" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active mx-2">
          <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">TV Shows</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Movies</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">My List</a>
        </li>
        <li class="nav-item mx-2">
          <form action="/page/search" method="GET class="search-form">
            <div class="input-group rounded-pill">
              <input style="background: transparent; color:white;"  name="search" type="text" class="form-control rounded-pill" placeholder="Search">
              <div class="input-group-append" >
                <button class="btn btn-transparant" style="margin-left: -40px" type="submit">
                  <i class="fas fa-search" style="color: white;"></i>
                </button>
              </div>
            </div>
          </form>      
        </li>
      </ul>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
  </nav>
  