<nav class="navbar navbar-expand-lg" id="bg-nav">
    <div class="container-fluid">
      <a class="navbar-brand fs-3" href="#">AutoSpace.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-3" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="{{route ('contact-us')}}">Contatti</a>
          </li>
        </ul>
        <form class="d-flex" role="search" method="GET" action="{{route ('cars.search')}}" >
          <input class="form-control me-2 fs-4" name="searchKey" type="search" placeholder="Search" aria-label="Search">
          <button class="btn fs-4" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>