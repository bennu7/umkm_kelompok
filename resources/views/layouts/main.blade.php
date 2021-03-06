<?php
// include 'env.php';

// $query = "SELECT * FROM user WHERE id = 16";
// $result = mysqli_query($conn, $query);
// $hasil = mysqli_fetch_assoc($result);
// var_dump($hasil['username']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UMKM | {{ $title }}</title>
    <!-- CSS files -->
    <link href="https://umkm.test/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="https://umkm.test/dist/css/demo.min.css" rel="stylesheet" />
    <link rel="icon" href="amikom_icon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="amikom_icon.ico" type="image/x-icon" />
    <script>
        var base_url = 'https://umkm.test/'
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/tabler.min.js"></script>
    <script src="js/mazer.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#load-header").load(base_url + "layout/header.php");
            $("#load-footer").load(base_url + "layout/navbar.php");
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    \integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>