function tambah(){
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var hasil = doucment.getElementById("hasil");

    hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value);
}

function kali(){
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var hasil = doucment.getElementById("hasil");

    hasil.innerHTML = parseInt(bil1.value) * parseInt(bil2.value);
}