function selamatDatang(){
    alert("Hai! Welcome to my website");
}
var i = 0;
            var txt = 'Karena Tabo Toba Merupakan Tempat Yang Pas Untuk Membeli Oleh-oleh Khas Toba Yang Sudah Terjamin Kualitas dan Rasa Nya Dan Tabo toba masih menggunakan tenaga manual dalam pembuatan produk makanannya dan tidak menggunakan bahan pengawet Dan Dijamin Pasti Tidak akan kecewa Jika Mencoba Nya ';
            var speed = 30;
            
            function typeWriter() {
              if (i < txt.length) {
                document.getElementById("typing").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
              }
            }