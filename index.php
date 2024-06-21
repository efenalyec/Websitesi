<?php
include "php/connect.php";
include "php/veri.php";


?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İpek Piliç</title>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/contact.css">
  <style>

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="images/23392723.svg" alt="eefe" height="50px" width="50px">
      <a class="navbar-brand m-lg-2" href="index.php">İpek Piliç</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="margin-left:400px;">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">Hakkımızda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="items.php">Ürünlerimiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="works.php">Ödevler</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">
    <div class="content">
      <h3 class="deneme123" style="text-align:left;">İpek Piliç'e Hoşgeldiniz</h3>
    </div>
    <div class="swiffy-slider">
      <ul class="slider-container">
        <li><img src="images/ilk1.jpg" height="420px" width="75%" style="margin-left: 170px;"></li>
        <li><img src="images/ilk2.jpg" height="420px" width="75%" style="margin-left: 170px;"></li>
        <li><img src="images/ilk3.png" height="420px" width="75%" style="margin-left: 170px;"></li>
      </ul>

      <button type="button" class="slider-nav"></button>
      <button type="button" class="slider-nav slider-nav-next"></button>

      <div class="slider-indicators" style="text-align:center; margin-bottom:0;">
        <button class="active"></button>
        <button></button>
        <button></button>
      </div>
    </div>
    <div class="news">
    <h2 style="text-align:left; margin-bottom:30px;">Haberler</h2>
     <div class="news-content">
      <ul>
        <div style="display: inline-flex;" class="content-1">
        <li><h4>Büyük Bir Heyecanla: Yeni Web Sitemiz Yayında!</h4>
        <img src="images/acildi.jpg" alt="açıldı" height="400px" style="float:left; width:50%;">
        <p style="margin-left:650px;">Merhaba sevgili ziyaretçilerimiz, <br>

Büyük bir heyecanla sizlere harika bir haberi paylaşmak istiyoruz: Yeni web sitemiz artık yayında! 🌟
<br>
Bu süreçte, siz değerli kullanıcılarımızın beklentilerini karşılayacak, keyifle gezineceğiniz ve kolayca bilgiye ulaşabileceğiniz bir platform oluşturmak için çok çalıştık. Şimdi, bu emeklerin sonucunu sizlerle paylaşmanın mutluluğunu yaşıyoruz.
<br>
Haberin devamı için <a href="html/haber1devam.html">tıklayınız.</a>
</p>

        </li>
        </div>
        
        <div class="conent-2" style="display:inline-flex; ">
        <li>
        <h4 style="margin-top:40px;">Yeni Depomuz Açıldı: Tavukçuluk ve Izgara Salonumuz İçin Büyük Adım!</h4>
        <img src="images/acildi.jpg" alt="açıldı" height="400px" style="float:left; width:50%;">
        <p style="margin-left:650px;">Sevgili müşterilerimiz ve tavuk severler,<br>
        Sizlere heyecan verici bir haberimiz var: Tavukçuluk ve ızgara salonumuzun yeni deposu büyük bir coşkuyla açıldı! 🎉 Bu yeni gelişme, sizlere daha kaliteli hizmet sunabilmek ve lezzetlerimizi daha geniş kitlelere ulaştırmak için attığımız önemli bir adımdır.
        <a href="html/haber2devam.html">tıklayınız.</a>
</p>

        </li>
        </div>
        
        <li></li>
      </ul>
     </div>

    </div>

    <div class="sagsol">
      <h2 style="text-align:left; margin-bottom:30px;">Kullanıcı Yorumları</h2>
      <h3 style="text-align:left; margin-bottom:30px;"> Yorum yapmak için <a style="text-decoration: none;" href="yorumyap.php" target = "_blank">tıklayınız.</a> </h3>
      <div class="soltaraf">

        <div class="foto">

          <img src="<?php echo $row["foto"]  ?>" alt="" class="foto">

        </div>
        <div class="isim" style="margin-left:20px;">
          <h4><?php echo $row["isim"]  ?></h4>

        </div>
        <div class="yorum">
          <p><?php echo $row["yorum"]  ?></p>

        </div>
      </div>
      <div class="sagtaraf">
        <?php
        $sql = "select *
     from yorumlar  
     ORDER BY id DESC
     LIMIT 1 OFFSET 1;
     ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        ?>
        <div class="foto">
          <img src="<?php echo $row["foto"]  ?>" alt="" class="foto">
        </div>
        <div class="isim" style="margin-left:20px;">
          <h4><?php echo $row["isim"]  ?></h4>
        </div>
        <div class="yorum">
          <p><?php echo $row["yorum"]  ?></p>
        </div>
      </div>
    </div>
    <div class="necati">

    </div>
    <div class="soltaraf2">
      <?php
      $sql = "select *
     from yorumlar  
     ORDER BY id DESC
     LIMIT 1 OFFSET 2;
     ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

      ?>
      <div class="foto">

        <img src="<?php echo $row["foto"]  ?>" alt="" class="foto">

      </div>
      <div class="isim" style="margin-left:20px;">
        <h4><?php echo $row["isim"]  ?></h4>

      </div>
      <div class="yorum">
        <p><?php echo $row["yorum"]  ?></p>

      </div>

    </div>
    <div class="sagtaraf2">
      <?php
              $sql = "select *
            from yorumlar  
            ORDER BY id DESC
            LIMIT 1 OFFSET 3;
            ";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              ?>
      <div class="foto">
        <img src="<?php echo $row["foto"]  ?>" alt="" class="foto">
      </div>
      <div class="isim" style="margin-left:20px;">
        <h4><?php echo $row["isim"]  ?></h4>
      </div>
      <div class="yorum">
        <p><?php echo $row["yorum"]  ?></p>
      </div>

    </div>
    <div class="necati">
      
    </div>
  
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php
  mysqli_close($conn);
  ?>
</body>

</html>