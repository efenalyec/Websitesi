<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Örneği</title>
</head>
<body>
    <h2>Kullanıcı Bilgileri Formu</h2>
    <form>
        <label for="fname">Adınız:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Soyadınız:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="email">E-posta Adresiniz:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="age">Yaşınız:</label><br>
        <input type="number" id="age" name="age"><br><br>
        <label for="gender">Cinsiyetiniz:</label><br>
        <select id="gender" name="gender">
            <option value="male">Erkek</option>
            <option value="female">Kadın</option>
            <option value="other">Diğer</option>
        </select><br><br>
        <label for="message">Mesajınız:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Gönder">
    </form>
    
</body>
</html>
