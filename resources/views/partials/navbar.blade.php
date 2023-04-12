<nav class="navbar navbar-expand-lg navbar-dark bg-transparant fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">{{env('TITLE')}}</a>
    
    <div class="collapse navbar-collapse ml-lg-1" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active mx-2">
          <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/category/drama">Drama</a>
            <a class="dropdown-item" href="/category/Action">Action</a>
            <a class="dropdown-item" href="/category/Thriller">Thriller</a>
            <a class="dropdown-item" href="/category/Comedy">Comedy</a>
            <a class="dropdown-item" href="/category/Horror">Horror</a>
            <a class="dropdown-item" href="/category/Adventure">Adventure</a>
            <a class="dropdown-item" href="/category/Crime">Crime</a>
            <a class="dropdown-item" href="/category/Fantasy">Fantasy</a>
            <a class="dropdown-item" href="/category/Romance">Romance</a>
            <a class="dropdown-item" href="/category/Animation">Animation</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Years
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/year/2023">2023</a>
            <a class="dropdown-item" href="/year/2022">2022</a>
            <a class="dropdown-item" href="/year/2021">2021</a>
            <a class="dropdown-item" href="/year/2020">2020</a>
            <a class="dropdown-item" href="/year/2019">2019</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Countries
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/country/indonesia">Indonesia</a>
            <a class="dropdown-item" href="/country/Usa">Usa</a>
            <a class="dropdown-item" href="/country/Malaysia">Malaysia</a>
            <a class="dropdown-item" href="/country/Korea">Korea</a>
            <a class="dropdown-item" href="/country/China">China</a>
            <a class="dropdown-item" href="/country/Thailand">Thailand</a>
            <a class="dropdown-item" href="/country/united-kingdom">United Kingdom</a>
          </div>
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
  