<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //cek hanya yang invalid
            if (nrp.value=="") {
                nrp.focus();
                nrp.placeholder="contoh : 5206100126";
                alert("NRP harus diisi!");
                return false;
            }

            //harus 10 digit
            if (nrp.value.length!=10) {
                nrp.focus();
                alert("NRP harus 10 digit, anda memasukkan "+nrp.value.length+" digit");
                return false;
            }

            //yang ada abjad a..z invalid
            if (isNaN(nrp.value)==true) {
                nrp.focus();
                msg.innerHTML = "NRP harus angka";
                return false;
            }
        }
    </script>
</head>

<body>
    <div class = "container">
        <div class = "jumbotron"> 
            Form Validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai constraint database  
    </div>
    <script>
        function validate()
        {
            console.log("baris 19");
            return false;
            console.log("baris 21");
            return true;
            console.log("baris 23");
            return false;
        }
    </script>
    <form action="https://google.com" method="get" onsubmit="return validateForm();">
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp"><div id="msg" class="text-danger"></div>
        </div>
        <input type="submit" value="DAFTAR" class="btn btn-primary">
        <input type="reset" value="ULANGI" class="btn btn-warning">
    </form>
    </div>
</body>
</html>