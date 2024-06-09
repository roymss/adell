<?php

if (isset($_POST["cari"])) {
  $blog = cari($_POST["keyword"]);
}

?>


<nav class="nav-head navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="page/beranda.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page/tentang.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page/kontak.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login/login.php" target="_blank">Login</a>
        </li>

      </ul>
      <form class="d-flex" role="search" method="post">
        <input class="form-control  me-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit" name="cari">Search</button>
      </form>
    </div>
  </div>
</nav>