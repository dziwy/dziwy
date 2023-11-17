<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel C1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>    
<div class="container">
    <h1>Halaman Mahasiswa</h1>
    
    <div class="row">
        <div class="col-sm-6">
            <h4>Tabel Mahasiswa</h4>

            <table class="table">
                <tr>
                    <th>npm</th>
                    <th>nama</th>
                    <th>Alamat</th>
                    <th>Jk</th>
                    <th>Tgl lahir</th>
                </tr>
                <tr>
                    <td>2109020126</td>
                    <td>Fazry Dwi Soeowno</td>
                    <td>Binjai</td>
                    <td>LK</td>
                    <td>06-05-2001</td>
                </tr>
                <tr>
                  <td>2306200512</td>
                  <td>Rheyna Deavriska</td>
                  <td>Sambi Rejo</td>
                  <td>Pr</td>
                  <td>17-02-2005</td>
                  </tr>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h4>form Mahasiswa</h4>
            </div>
        </div>
        </div>
    
    
    
       
    
   
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>