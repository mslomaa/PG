<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PG</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="https://pg.edu.pl/documents/10607/18545618/pg_poziome_logo_kolor-300x212.jpg?t=1383222176436" class="img-fluid img" alt="LogoPG">
            </div>
        </div>
        <div class="row section1">
            <div class="col-sm subsection1">
                One of three columns
            </div>
            <div class="col-sm ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse backgorund-color-row" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">STRONA GŁÓWNA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">PRACOWNICY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">BIZNES</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        UCZELNIA
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">UCZELNIA 1</a></li>
                                        <li><a class="dropdown-item" href="#">UCZELNIA 2</a></li>
                                        <li><a class="dropdown-item" href="#">UCZELNIA 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ABSOLWENCI</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm subsection2">
                One of three columns
            </div>
        </div>
        <div class="row section2">
            <div class="col-sm  subsection1">
                One of three columns
            </div>
            <div class="col-sm ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse subsection2" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">START</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">STUDIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">III STOPIEŃ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">PŁATNOŚCI</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm subsection2">
                One of three columns
            </div>
        </div>
        <div class="row section3">
            <div class="col-sm">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Wybierz miasto</a>
                    <ul class="dropdown-menu dropdown-menu-end wrapper">
                        @foreach($data as $item)
                        <li>{{$item['stationName']}}</li>
                        @endforeach
                    </ul>
            </div>
        </div>
        <div class="row section4">
            <div class="col-sm">
                KONTAKT
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>