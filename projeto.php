<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>SciWiki</title>
  <link rel="icon" href="img/favicon.ico">

<!--   Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


<!--   Our CSS -->
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-nav-bar py-3">
    <div class="container">
      <a class="navbar-brand" href="index.php">SciWiki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projeto.php">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register-project.php">Share your project</a>
          </li>
        </li>
        </ul>
      </div>
    </div>
</nav>
<!--
  <div class="menu-lateral">
    <p>Categories</p>
    <a href="#">Science</a>
    <a href="#">Technology</a>
    <a href="#">Astronomy</a>
    <a href="#">Health</a>
  </div>
-->


   <section class="p-5" id="services">
    <h1 class="pesquisar-h1">Categories</h1>
    <div class="container py-5">
      <div class="row text-center g-4">
        <div class="col-md">
          <div class="card bg-dark text-light p-5">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-globe-americas"></i>
              </div>
              <h3 class="card-title mb-3">Environment</h3>
              <a href="environment.php" class="btn btn-primary">Read more</a>
          </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-dark text-light p-5">
            <div class="card-body text-center">
              <div class="h1 mb-3">
               <i class="bi bi-heart-pulse"></i>
              </div>
              <h3 class="card-title mb-3">Health</h3>
              <a href="health.php" class="btn btn-primary">Read more</a>

          </div>

          </div>

        </div>
        <div class="col-md">
          <div class="card bg-dark text-light p-5">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-laptop"></i>
              </div>
              <h3 class="card-title mb-3">Tech</h3>
              <a href="tech.php" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="p-3 bg-custom-footer text-white text-center position-relative">
    <div class="container">
      <a class="footer-link" href="https://www.spaceappschallenge.org/2023/challenges/a-marketplace-for-open-science-projects/?tab=details">NASA International Space Apps Challenge</a>
      <p class="mb-0"> Developed by Lovelaces Team 🤍</p>
    </div>
  <a href="https://storyset.com/online">Online illustrations by Storyset</a>
</footer>


<!--   Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


<!--   Our JS -->
  <script src="script.js"></script>
</body>

</html>