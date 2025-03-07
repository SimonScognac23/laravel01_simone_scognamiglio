<!doctype html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Link per il font Roboto, Montserrat e Poppins tramite Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Collegamento al file CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Collegamento al file di stile personalizzato (style.css) -->
    <link rel="stylesheet" href="/style.css"> 
  </head>

  <body>

    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home-page')}}">Home</a> <!--uri della home-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('chi-siamo')}}">Chi siamo</a> <!--uri di chi siamo-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('kojima-productions')}}">Hideo Kojima</a> <!--uri di hideo kojima-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('nostri-servizi')}}">I nostri servizi</a> <!--uri di hideo kojima-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar end-->

    <!-- SCHEDA PATRIOT START-->
    <div class="container-fluid bg-body-secondary vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12">
                <h1 class="text-center py-5">
                    {{$patriot['name']}} {{$patriot['surname']}}   <!--   {{$patriot['name']}}fammi vedere che c'è nell array $patriot in chiave name -->
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 col-md-6">
                <img src="{{ $patriot['photo'] }}" class="img-fluid" alt="{{ $patriot['name'] }} {{ $patriot['surname'] }} Photo">
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
        <div class="col-12 col-md-6 bg-body-secondary p-4 text-center">
            <h2> {{$patriot['biography']}} </h2>
            <a href="{{route('chi-siamo')}}" class="btn btn-outline-secondary mt-4">Go back</a>
        </div>
    </div>
    <!-- SCHEDA PATRIOT END-->

    <!-- Inclusione degli script di Bootstrap per funzionalità interattive come il menu mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>

<!-- // IMPORTANT ---- andro a creare la sotto cartella 'Patriot' dentro 'views' e la pagina 'dettaglioPatriot' l'andrò a creare li dentro!! -->
