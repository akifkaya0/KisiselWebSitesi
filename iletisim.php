<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>İletişim</title>
    
    <meta name = "viewport" content ="width=device-width , initial scale=1">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stilim.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <script src="iletisimKontrol.js"></script>
</head>
<body>

    <div class="container-fluid kontey girisYap">

        <div class="row">

            <div class="col-md-5 col-sm-12 sol" style="height:auto; padding-bottom: 15%;">

                <div style="width: 100%;">
                    <div style="width: 100%; height: 15%; background-color: cadetblue;">
                    
                        <a href="index.html"><img src="photo/ana_sayfa/anaSayfaSimge.png" style="float: left; margin: 2%; width: 6%; min-width: 40px;"></a>
                            
                    </div>

                    <div style="clear: both;"></div>
    
                    <div style="margin-top: 5%;">
    
                        <p class="baslik" id="girisYapBaslik">İLETİŞİM</p>
    
                    </div>
                        
                    <div style="min-width:100px; margin-top: 5%; margin-left: 30%; width: 40%;">
                        <form action="iletisimGoruntule.php" method="POST" onsubmit="return formKontrol(this);">
                        
                            <div>
    
                                <div class="textBox">
                                    <input type="text" name="ad" placeholder="Adınız...">
                                </div>

                                <div class="textBox">
                                    <input type="text" name="soyad" placeholder="Soyadınız...">
                                </div>

                                <div class="textBox">
                                    <input type="list" name="bolum" list="bolumler" placeholder="Bölüm Seçiniz...">

                                    <datalist id="bolumler">
                                        <option value="Bilgisayar Mühendisliği"></option>
                                        <option value="Bilişim Sistemleri Mühendisliği"></option>
                                        <option value="Yazılım Mühendisliği"></option>
                                    </datalist>
                                </div>

                                <div>
                                    <select style="width: 100%; margin-bottom: 10px;" name="sinif">
                                        <option value="0" selected>Sınıf Seçiniz...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="iletisimBox" style="color:white; text-align:left;">
                                    <label for="" style="color:white;">Cinsiyet : </label><br>
                                    <input type="radio" name="cinsiyet" value="Erkek"> Erkek <br>
                                    <input type="radio" name="cinsiyet" value="Kadın"> Kadın <br>
                                </div>

                                <div class="iletisimBox" style="color:white; text-align:left;">
                                    <label style="color:white;" >Bilinen Diller : </label>
                                    <br>
                                    <input type="checkbox" name="dil[]" value="Türkçe" >Türkçe <br>
                                    <input type="checkbox" name="dil[]" value="İngilizce">İngilizce <br>
                                    <input type="checkbox" name="dil[]" value="Almanca ">Almanca <br>
                                    <input type="checkbox" name="dil[]" value="Çince">Çince <br>
                                    <input type="checkbox" name="dil[]" value="İspanyolca">İspanyolca <br>
                                    <input type="checkbox" name="dil[]" value="Fransızca">Fransızca
                                </div>

                                <div class="textBox">
                                    <input type="text" name="ePosta" placeholder="E-posta...">
                                    <input type="password" name="sifre" placeholder="Şifre...">
                                </div>

                                <div class="textBox" >
                                    <input type="file" name="dosya" style="color: white;" >
                                </div>

                                <div>
                                    <textarea name="mesaj" cols="25" rows="5" placeholder="Mesajınız..."></textarea>
                                </div>

                                <div class="buton" >
                                    <input type="submit" value="Gönder..." style="background-color: #455a64;">
                                </div>

                                <div class="buton" >
                                    <input type="reset" value="Temizle..." style="background-color: #455a64;">
                                </div>
                            </div>
                        
                        </form>
    
                    </div>
                </div>

            </div>

            <div class="col-md-7 col-sm-12 sag">

                <img src="photo/iletisim.png" style="width: 86%;">

            </div>

        </div>

    </div>

</body>
</html>