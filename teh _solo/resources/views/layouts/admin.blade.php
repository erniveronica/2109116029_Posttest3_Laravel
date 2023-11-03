
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/logo.png" />
    {{-- CSS & BOSTRAP --}}
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    {{-- Khusus Navbar --}}
    <nav class="container sticky-top navbar bg-white navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand pl-4 logo" href="/">Es Teh Solo</a>
            <div class="app-utility-item app-user-dropdown dropdown">
                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"> <img src="/assets/user.png" alt="Logo" width="50"></a>
                <ul class="dropdown-menu container" aria-labelledby="user-dropdown-toggle">
                    <li><a class="dropdown-item" href="/admin/home">Beranda</a></li>
                    <li><a class="dropdown-item" href="/admin/tentang">Tentang</a></li>
                    <li><a class="dropdown-item" href="/admin/menu">Menu</a></li>
                    <li><a class="dropdown-item" href="/bahan_baku">Bahan Baku</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="{{ route('logout') }}" method="post" style="display: inline;">
                        @csrf
                        <button type="submit" class="dropdown-item">Log Out</button>
                    </form>
                </ul>
            </div><!--//app-user-dropdown-->
        </div>
    </nav>
    @yield('base')

    {{-- Khusus Footer --}}
    <footer class="text-center pt-3">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-left mb-2">
                    <a href="https://www.instagram.com/estehsolo_/"><i
                            class="bi bi-instagram custom-instagram-icon"></i></a>
                    <span class="garis mx-3">|</span>
                    <a href="https://www.youtube.com/channel/UC3U8fhJOl78YkmzSEmbEUSg"><i
                            class="bi bi-youtube custom-youtube-icon"></i></a>
                </div>
                <div class="col-md-6 text-md-right">
                    <p>© 2023 - IT Development @Erni Veronica Sidabutar - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

</body>

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="/js/script.js"></script>

</html>

