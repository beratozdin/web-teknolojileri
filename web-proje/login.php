<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome Tüm İkon Paketi-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" 
    integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>

    <!-- Trirong Fontu -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

    <!-- CSS Dosyası -->
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Tekirdağ</title>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success">

  <div class="container">

    <a class="navbar-brand" href="sehrim.html"><i class="fas fa-person-walking-luggage"></i>Tekirdağ</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Hakkında</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sehrim.html">Şehrim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ilgialani.html">İlgi Alanlarım</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.html">Giriş Yap</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İletişim</a>
        </li>     
      </ul>
    </div>
  </div>
</nav>
<br><br>
    <header>       
        <br><br><br>
        <h1>Giriş Sayfası</h1>
       
    </header>
    <main class="justify">

        <div class="container mt-5 w-50 text-center p-5">
        
            <?php 
                $admin = "b211210377@sakarya.edu.tr";
                $password = "b211210377";
                $namesurname="Berat Özdin";

                if (($_POST["email"] == $admin) and ($_POST["password"] == $password)){        
                echo("<br> <br> Hoşgeldiniz , $password");                  
                header("Refresh: 2; url=index.html");
                
                }
            
                else{
                    echo "Kullancı Adı veya Şifre Yanlış.<br> <br>";
                    echo "TEKRAR DENEYİNİZ";
                    header("Refresh: 2; url=login.html");
                }
            
            ?>
        
        </div>

    </main>

<!-- Footer -->
<footer class="bg-danger text-center text-light">
    
    <div class="container p-4">

        <br><br>
        <section class="mb-4">
            <p>
                Berat Özdin tarafından 2022 yılında Sakarya Üniversitesi Web Teknolojileri dersi kapsamında hazırlanmıştır.
            </p>
        </section>
        
    </div>
    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://www.linkedin.com/in/beratozdin/">Berat Özdin</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>