
const BASE_URL1 = 'https://api.themoviedb.org/3/movie/489?api_key=b40d72c13b5590696277c59f63b56c7c&language=tr';
const BASE_URL2 = 'https://api.themoviedb.org/3/movie/20544?api_key=b40d72c13b5590696277c59f63b56c7c&language=tr';
const BASE_URL3 = 'https://api.themoviedb.org/3/movie/1402?api_key=b40d72c13b5590696277c59f63b56c7c&language=tr';

FilmGetir(BASE_URL1);
FilmGetir(BASE_URL2);
FilmGetir(BASE_URL3);

function FilmGetir(url){

    fetch(url).then(res => res.json()).then(data =>{
        console.log(data);
        FilmiGoster(data);
    })

}

var n = 1;

function FilmiGoster(d) {
    var isim = d.title;
    var ozet = d.overview;
    var tur = d.genres[0].name;
    var orjinalİsim = d.original_title;

    document.getElementById('film' + n).innerHTML = "<br>Film İsmi : " + isim + "<br><br>" + "Filmin Orjinal İsmi : " + orjinalİsim + "<br><br>" + "Filmin Türü : " + tur + "<br><br>" + "Özet : " + ozet;
    
    var foto = "https://image.tmdb.org/t/p/original" + d.poster_path;
    document.getElementById('film' + n + 'Foto').src = foto;

    n++;
}
