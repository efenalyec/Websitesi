<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İpek Piliç</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  

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
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürünler</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: white;
    padding: 1em 0;
    text-align: center;
}

header h1 {
    margin: 0;
}

main {
    padding: 2em;
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 2em;
    justify-content: center;
}

.product {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1em;
    text-align: center;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}

.product:hover {
    transform: translateY(-5px);
}

.product img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.product h2 {
    font-size: 1.2em;
    margin: 0.5em 0;
}

.product p {
    color: #555;
    font-size: 0.9em;
}

    </style>
</head>
<body>
    <header>
        <h1>Ürünlerimiz</h1>
    </header>
    <main>
        <div class="product-list">
            <div class="product">
                <img src="imagesitems/baget.jfif" alt="Ürün 1">
                <h2>Baget</h2>
                <p>Bu, Ürün 1'in açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/bonfile.jpg" alt="Ürün 2">
                <h2>Bonfile</h2>
                <p>Bu, Ürün 2'nin açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/sarma.jfif" alt="Ürün 3">
                <h2>Sarma</h2>
                <p>Bu, Ürün 3'ün açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/çıtırkelebek.jpg" alt="Ürün 4">
                <h2>Çıtır Kelebek</h2>
                <p>Bu, Ürün 4'ün açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/kanat.jpg" alt="Ürün 5">
                <h2>Kanat</h2>
                <p>Bu, Ürün 5'in açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/kbut.jpg" alt="Ürün 6">
                <h2>Kalçalı But</h2>
                <p>Bu, Ürün 6'nın açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/taşlık.jpg" alt="Ürün 7">
                <h2>Taşlık</h2>
                <p>Bu, Ürün 7'nin açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/ciğer.jpg" alt="Ürün 8">
                <h2>Ciğer</h2>
                <p>Bu, Ürün 8'in açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/indir.jfif" alt="Ürün 9">
                <h2>Yürek</h2>
                <p>Bu, Ürün 9'un açıklamasıdır.</p>
            </div>
            <div class="product">
                <img src="imagesitems/bütünpiliç.jpg" alt="Ürün 10"> 
                <br><br><br>
                <h2>Bütün Piliç</h2>
                <p>Bu, Ürün 10'un açıklamasıdır.</p>
            </div>
        </div>
    </main>
</body>
</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>