<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodExpress (BS4 Spinners)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        body {
            background: #f3e4f5;
        }

        .header {
            background: #a7abde;
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .loading {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        .keranjang-loading {
            display: none;
            text-align: center;
            margin-top: 10px;
        }

        .keranjang-loading .spinner-grow {
            width: 1rem;
            height: 1rem;
        }

        .roboto-slab-judul {
            font-family: "Roboto Slab", serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .open-sans-font {
            font-family: "Open Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }
    </style>
</head>

<body>
    <script>
        function pesanMakanan() {
            document.getElementById("loadingArea").style.display = "block";
            setTimeout(function () {
                document.getElementById("loadingArea").style.display = "none";
                alert("Pesanan berhasil ditambahkan!");
            }, 2000);
        }
        function bayarPesanan() {
            let spinner = document.getElementById("paySpinner");
            spinner.classList.remove("d-none");
            setTimeout(function () {
                spinner.classList.add("d-none");
                alert("Pembayaran berhasil!");
            }, 2000);
        }

        function bukaKeranjang() {
            document.getElementById("keranjangLoading").style.display = "block";
            setTimeout(function () {
                document.getElementById("keranjangLoading").style.display = "none";
                alert("Keranjang pembelian dibuka!");
            }, 2000);
        }
    </script>
    <div class="container mt-4">
        <div class="header text-center">
            <h1 class="roboto-slab-judul">FoodExpress</h1>
            <p class="open-sans-font">Pesan makanan favoritmu secara online di sini!</p>
        </div>
        <h3 class="open-sans-font mb-3">Menu Makanan</h3>

        <div class="text-right mb-3">
            <button class="btn btn-warning" onclick="bukaKeranjang()">
                🛒 Keranjang Pembelian
            </button>
            <div class="keranjang-loading" id="keranjangLoading">
                <span class="spinner-grow text-warning"></span>
                <small class="ml-1 text-warning font-weight-bold">Membuka keranjang pembelian...</small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>Nasi Goreng</h5>
                    <p>Rp 20.000</p>
                    <button class="btn btn-info" onclick="pesanMakanan()">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>Mie Ayam</h5>
                    <p>Rp 15.000</p>
                    <button class="btn btn-info" onclick="pesanMakanan()">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>Ayam Geprek</h5>
                    <p>Rp 18.000</p>
                    <button class="btn btn-info" onclick="pesanMakanan()">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>

        <div class="loading" id="loadingArea">
            <div class="spinner-border text-danger"></div>
            <p class="mt-2">Pesanan sedang diproses...</p>
        </div>
        <div class="text-center mt-4">
            <button class="btn" style="background-color: #d4f5dd; color: darkolivegreen;" onclick="bayarPesanan()">
                <span class="spinner-border spinner-border-sm d-none" id="paySpinner"></span>
                Bayar Pesanan
            </button>
        </div>
    </div>

</body>

</html>
