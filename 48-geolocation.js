var x = document.getElementById("lokasi")

function getLocation(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(tunjukanPoisisi)
    } else{
        x.innerHTML = "Geolocation tidak mensupport browser anda"
    }

}

function tunjukanPoisisi(position){
    x.innerHTML = "Latitude : " + position.coords.latitude + 
    "<br>Longtitude : " + position.coords.longitude
}