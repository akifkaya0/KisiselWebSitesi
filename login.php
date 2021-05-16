<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    
    <meta name = "viewport" content ="width=device-width , initial scale=1">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stilim.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">

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
    
                        <p class="baslik" id="girisYapBaslik">GİRİŞ YAP</p>
    
                    </div>
                        
                    <div style="min-width:100px; margin-top: 5%; margin-left: 30%; width: 40%;">
                        <form action="loginKontrol.php" method="POST">
                        
                            <div>
    
                                <div class="textBox">
    
                                    <p class="metin">Kullanıcı Adı :</p>
                                    <input type="text" name="kullaniciAdi" value="" id="" required>
    
                                </div>
    
                                <div class="textBox">
    
                                    <p class="metin">Şifre : </p>
                                    <input type="password" name="sifre" id="" required>
    
                                </div>
    
                                <div class="buton" style="text-align: center;">
    
                                    <input type="submit" value="GİRİŞ YAP">
    
                                </div>
                            
                            </div>
                        
                        </form>
    
                    </div>
                </div>

            </div>

            <div class="col-md-7 col-sm-12 sag">

                <img src="photo/login.png" style="width: 86%;">

            </div>

        </div>

    </div>

</body>
</html>