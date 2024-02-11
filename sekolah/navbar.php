<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    
    <style>
  body {
    background-image: url('bg.jpg'); /* Ganti 'gambar.jpg' dengan URL atau path ke gambar yang ingin Anda gunakan */
    background-size: cover; /* Memastikan gambar diatur ulang agar mengisi seluruh area latar belakang */
    
    background-repeat: no-repeat; /* Mencegah gambar diulang pada latar belakang */
  }
  </style>
</head>
<body>

 
<nav class="navbar navbar-expand-lg bg-primary">
  

<div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 3 JEPARA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="/sekolah/siswa">Siswa</a>
        <a class="nav-link" href="/sekolah/jurusan">Jurusan</a>
        <a class="nav-link" href="/sekolah/kls">kelas</a>
      </div>
    </div>
  </div>
</nav>
</body>

</html>
<script type="module">
  import { Toast } from 'bootstrap.esm.min.js'

  Array.from(document.querySelectorAll('.toast'))
    .forEach(toastNode => new Toast(toastNode))
</script>