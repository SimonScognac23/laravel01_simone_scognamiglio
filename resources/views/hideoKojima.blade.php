<!doctype html>
<html lang="en">

<head>
    <!-- Impostazione del charset e della viewport per la responsività -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Collegamento ai font da Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Collegamento al file CSS di Bootstrap per i componenti predefiniti -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Collegamento al tuo file CSS personalizzato (style.css) -->
    <link rel="stylesheet" href="/style.css"> <!-- Integra il file style.css dal public -->
</head>

<body>

    <!-- Navbar: Barra di navigazione principale -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Pulsante per la visualizzazione del menu su dispositivi mobili -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu di navigazione che appare quando la navbar è espansa -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Link per la home page -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home-page')}}">Home</a> <!-- URI per la home page -->
                    </li>
                    <!-- Link per la pagina "Chi siamo" -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('chi-siamo')}}">Chi siamo</a> <!-- URI per la pagina "Chi siamo" -->
                    </li>
                    <!-- Link per la pagina "Hideo Kojima" -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('kojima-productions')}}">Hideo Kojima</a> <!-- URI per la pagina "Hideo Kojima" -->
                    </li>
                    <!-- Link per la pagina "I nostri servizi" -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('nostri-servizi')}}">I nostri servizi</a> <!-- URI per la pagina "I nostri servizi" -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Sezione Hero: Una sezione di benvenuto o introduzione con un possibile contenuto visivo -->
    <section class="hero-section">
        <div class="container">
            <!-- Puoi aggiungere contenuto visivo o testo qui per rappresentare la sezione principale della tua pagina -->
        </div>
    </section>

    <!-- Inclusione degli script di Bootstrap per funzionalità interattive (come il menu a tendina) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
