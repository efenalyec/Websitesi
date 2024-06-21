<?php
include "connect.php";

$name=$_POST['name'];
$email=$_POST['email'];
$comment = $_POST['comment'];
$foto = "";
/* Yorumun hemen eklenmesini  istiyorsanız bu kodu açın.
$sql="INSERT INTO yorumlar (isim,yorum,email,foto) VALUES ('$name','$comment','$email','$foto')";*/
$sql="INSERT INTO kontrol (isim,yorum,email,foto) VALUES ('$name','$comment','$email','$foto')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Yorumunuz başarıyla kaydedildi. Onaylanmasını bekleyiniz. İletişim yoluyla fotoğraf gönderebilirsiniz.') </script>";
    sleep(5);
} else {
    echo "Yorum kaydedilirken hata oluştu: " . $conn->error;
}
// Bağlantıyı kapat
$conn->close();
echo "<script>window.open('../index.php','_self')</script>";



?>