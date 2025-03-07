<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>

    <!-- Collegamento per il pre-caricamento dei font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Preconnessione a fonts.googleapis.com per una connessione più veloce -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Preconnessione per la parte del font statico -->

    <!-- Collegamento ai font Montserrat, Poppins e Roboto da Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Collegamento al CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Collegamento al foglio di stile personalizzato -->
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <!-- Navbar inizio -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home-page') }}">Home</a> <!-- URI della home -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('chi-siamo') }}">Chi siamo</a> <!-- URI di chi siamo -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('kojima-productions') }}">Hideo Kojima</a> <!-- URI di Hideo Kojima -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('nostri-servizi') }}">I nostri servizi</a> <!-- URI dei servizi -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar fine -->

    <!-- Contenuto principale -->
    <div class="container-fluid bg-body-secondary vh-100 bg-background">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center py-5 title">
                    Kept you waiting, huh! {{$titolo}} <!-- Qui viene visualizzata la variabile $titolo -->
                </h1>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
