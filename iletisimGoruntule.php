<?php

echo "İsim : ".$_POST['ad']."<br>";
echo "Soyisim : ".$_POST['soyad']."<br>";
echo "Bölüm : ".$_POST['bolum']."<br>";
echo "Sınıf : ".$_POST['sinif']."<br>";
echo "Cinsiyet : ".$_POST['cinsiyet']."<br>";
echo "Bilinen Diller : ";
$diller = $_POST['dil'];

    foreach($diller as $dilBilinen) {
        echo $dilBilinen .' , ';
    }
echo "<br>";
echo "E-posta : ".$_POST['ePosta']."<br>";
echo "Şifre : ".$_POST['sifre']."<br>";
echo "Yüklenen Dosya : ".$_POST['dosya']."<br>";
echo "Kullanıcı Mesajı : ".$_POST['mesaj']."<br>";

?>