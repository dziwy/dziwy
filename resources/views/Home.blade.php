<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home-style.css">
</head>
<body>
    <!-- <div id="container">
        <div id = "sub">
        <div id="content">
        <div id="nav">
          <ul id="navbar">
            <li><a href="#" class="menu-item home"><span>Home</span></a></li>
            <li><a href="/profile"class="menu-item inactive"><span>Profile</span></a></li>
            <li><a href="/mahasiswa" class="menu-item inactive"><span>Mahasiswa</span></a></li>
            
              
            </li>
          </ul> 
        </div>
    </div> -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">UTS Laravel C1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">UTS Laravel C1</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
            </div>
              <div class="container">
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
{{-- <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="Mahasiswa">Mahasiswa</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="/profile">Profile</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="/tugaslorem">tugaslorem</a>
</li>

<li class="nav-item">
  <a class="nav-link" href="/About">About</a>
</li>
</ul> --}}
 {{-- </div>
    <div class="container">

            <h1>Halaman Home </h1>
        
            <div class="row text-center">
            <div class="col-sm-4 bg-success">kolom A</div>
            <p></p>
            <div class="col-sm-4 bg-info">koloom B</div>
            <div class="col-sm-4 bg-warning">kolom C</div>

            </div>
            <div class="row text-center">
            <div class="col-sm-4 bg-primary">kolom D</div>
            <div class="col-sm-8 bg-danger">kolom E</div>
            <h4></h4>
            <p></p>         
    </div>
  </div> --}}
      
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



