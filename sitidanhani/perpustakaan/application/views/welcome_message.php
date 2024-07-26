<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: lavender;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('Welcome');?>" style="color: black;">Toko Buku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=<?php echo site_url('Welcome/home');?> style="color: black;">Home</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo site_url('Welcome/admin');?>" style="color: black;"role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo site_url('Welcome/admin');?>">Buku</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('Welcome/penerbit');?>">Penerbit</a></li>
          </ul>
        </li>


        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('Welcome/pengadaan');?>" style="color: black;">Pengadaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<?php $this->load->view($content);?>
</div>

<!-- jsbootstrap -->
<script src = https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
	integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
	<!-- jsbootstrap -->
</body>
</html>