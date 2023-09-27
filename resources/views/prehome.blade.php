<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pre-Home</title>

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<style>
    .prehome {

        background-color: white;
        min-height: 100vh;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    @media (max-width: 1024px) {
        .prehome {
            background-color: white;
            min-height: 100vh;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>

<body class="" style="background-color: #e8e8e8;">
    <div class="pt-5 prehome" style="">
        <div class="text-center pt-5">
            <h3>Hallo <b>{{ $full_name }}</b>, Selamat Datang di Spectro.id !</h3>
            <h4>Silahkan pilih kamu akan menjadi apa?.</h4>
            <div class="row justify-content-center p-4">

                <div class="col-12 mb-3" onclick="window.location = '/set-role/1';">
                    <div class="card card-body text-white" style="background-color: #b42424">
                        <h2>
                            <i class="bi-search"></i>
                        </h2>
                        <h4>
                            Saya Mencari Pekerjaan
                        </h4>
                    </div>
                </div>
                <div class="col-12 mb-3" onclick="window.location = '/set-role/2';">
                    <div class="card card-body text-white" style="background-color: #b42424">
                        <h2>
                            <i class="bi-newspaper"></i>
                        </h2>
                        <h4>
                            Saya Memberi Pekerjaan
                        </h4>
                    </div>
                </div>
            </div>
            <img src="{{ asset('template/assets/images/logo/spectro.png') }}" alt="" class="pt-5">
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
