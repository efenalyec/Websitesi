<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div- Container yapısı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/odev3.css">
</head>
<body>
    <div class="container-fluid">
        <div class="ust-yazi">
            <h1>Div - Container yapısı</h1>
        </div>
        <hr>
        <div class="left-bar" id="left-bar">
            <ul>
                <li>Anasayfa</li>
                <li>Hakkımızda</li>
                <li>İletişim</li>
                <li>Destek</li>
                <li>İletişim</li>
                <li>Destek</li>
            </ul>
            <hr id="hr">
        </div>
        
        <div class="vr" id="vr"></div>
        <div class="content" id="content">
            <h1>Hüseyin Efe Ceylan</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit minus eaque, quam expedita recusandae ullam, explicabo voluptatum quidem temporibus facilis, sit aut laudantium! Corporis libero totam aliquid enim, error aut.
            Modi doloribus officia id corrupti assumenda eius et, est autem dolores porro ad suscipit perferendis veniam, voluptate esse, cumque totam eaque consequuntur minima reprehenderit molestiae? Possimus est sint expedita repudiandae.
            Possimus, dolor explicabo! Est dolore doloremque excepturi provident hic, mollitia velit quaerat error adipisci quo, veniam cum illo corporis quidem maiores sequi, nobis iusto molestias sit voluptatum. Officia, temporibus veniam.
            Suscipit aspernatur quam at. Voluptatibus modi autem sapiente amet dolorum maxime quas porro, reiciendis suscipit sequi adipisci itaque earum quasi? Fuga, a possimus consequatur totam vel blanditiis cumque esse sed.
            Obcaecati quidem numquam doloribus optio, sapiente voluptate. Minima numquam incidunt, optio expedita, vel aspernatur iure debitis ipsa temporibus qui unde est, maxime obcaecati rem! Minus harum fuga ea earum aliquid?</p>
        </div>
        
        <div class="footer" style=" background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
    margin-top: 10em;;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);">
        <p>&copy;Powered by Efe Ceylan</p>
        </div class="footer">
    </div>
    

<script>
    var leftbarheight =document.getElementById('left-bar').offsetHeight;/*Buradaki komutta aşağıda ve sağda bulunan çizgilerin eğer ki ekstra farklı bir eleman eklenirse onun boyutuna göre şekillenmesini sağlıyoruz*/ 
    document.getElementById('vr').style.height = leftbarheight + 'px';
    var leftbarwidth =document.getElementById('left-bar').offsetWidth;
    document.getElementById('hr').style.width = (leftbarwidth) + 'px';
    
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>