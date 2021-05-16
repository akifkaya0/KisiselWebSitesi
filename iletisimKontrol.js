function mailKontrol(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return (false)
  }
    return (true)
}

function formKontrol(form) {

    var isim = form.ad.value;
    var soyisim = form.soyad.value;
    var bolum = form.bolum.value;
    var sinif = form.sinif.value;
    var cinsiyet = form.cinsiyet.value;
    var email = form.ePosta.value;
    var sifre = form.sifre.value;
    var mesaj = form.mesaj.value;

    if (isim=="" || soyisim=="" || bolum=="" || sinif=="0" || cinsiyet=="" || email == "" || sifre == "" || mesaj == "") {
        alert("Lütfen Boş Alanları Doldurunuz !!");
        return false;
    }

    if (mailKontrol(email)) {
        alert("Mail Adresi Geçerli Değil !!");
        return false;
    }
    
    return true;
}
