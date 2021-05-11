<?php

$kullaniciAdi = "b201210009@sakarya.edu.tr";
$sifre1 = "b201210009";

$mail = $_POST["kullaniciAdi"];

if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
	
    if (($kullaniciAdi==$mail) && ($_POST["sifre"]==$sifre1)) {
        echo "Hoşgeldiniz ". $sifre1."<br>";
        echo "<a href=index.html>Ana Sayfaya Dönmek İçin Tıklayınız...</a>";
    }

    else {
        
        echo "Kullanıcı Adı Veya Şifre Yanlış.!!<br>";
        echo "Giriş sayfasına yönlendiriliyorsunuz.";
        header("Refresh: 5; url=login.php");
        exit;
    
    }
    
}

else {

    echo "Lütfen kullanıcı adını e-posta formatında giriniz.!!<br>";
    echo "Giriş sayfasına yönlendiriliyorsunuz.";
    header("Refresh: 5; url=login.php");
    exit;

}

?>