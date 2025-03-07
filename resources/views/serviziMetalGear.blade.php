<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags: Impostano la codifica dei caratteri e la viewport per la responsività -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Layout</title>

    <!-- Collegamento per pre-caricare i font da Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Collegamento ai font Montserrat, Poppins e Roboto da Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Collegamento al CSS di Bootstrap per lo stile responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Collegamento al CSS personalizzato (style.css), dove puoi aggiungere i tuoi stili -->
    <link rel="stylesheet" href="/style.css">
</head>

<body class="bg-light">

    <!-- Navbar: Barra di navigazione fissa nella parte superiore della pagina -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Icona per la visualizzazione del menu su dispositivi mobili -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu di navigazione che appare quando la navbar è espansa -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Link di navigazione: Home -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home-page')}}">Home</a> <!--url per la home-->
                    </li>
                    <!-- Link di navigazione: Chi siamo -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('chi-siamo')}}">Chi siamo</a> <!--url per la pagina "Chi siamo"-->
                    </li>
                    <!-- Link di navigazione: Hideo Kojima -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('kojima-productions')}}">Hideo Kojima</a> <!--url per la pagina di Hideo Kojima-->
                    </li>
                    <!-- Link di navigazione: I nostri servizi -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('nostri-servizi')}}">I nostri servizi</a> <!--url per la pagina dei servizi-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Corpo della pagina -->
    <div class="container py-5">
        <div class="row">
        
            <!-- Primo Riquadro -->
            <div class="col-md-6 mb-4">
                <div class="row g-0">
                    <div class="col-md-6">
                        <!-- Immagine del gioco Metal Gear Solid -->
                        <img src="https://th.bing.com/th/id/R.89de19497a23e7cf213f1cc808c50643?rik=a%2bOeDOXPHATYUA&riu=http%3a%2f%2fs.emuparadise.org%2ffup%2fup%2f52374-Metal_Gear_Solid_(G)_(Disc_1)-1.jpg&ehk=GoBBFUJFfRh1nsqHtB0Cpv4LvHuP%2fayPXFawZ7BFoP4%3d&risl=&pid=ImgRaw&r=0" class="img-fluid" alt="Image 1">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-4">
                            <h4> Metal Gear Solid </h4>
                            <!-- Visualizzazione del titolo dinamico (titolo1) -->
                            <p>{{$titolo1}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Secondo Riquadro -->
            <div class="col-md-6 mb-4">
                <div class="row g-0">
                    <div class="col-md-6">
                        <!-- Immagine del gioco Metal Gear Solid 2 -->
                        <img src="https://th.bing.com/th/id/OIP.rEzGF7lm6B552Z-9o76G0AHaHa?rs=1&pid=ImgDetMain" class="img-fluid" alt="Image 2">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-4">
                            <h4> Metal Gear Solid 2 </h4>
                            <!-- Visualizzazione del titolo dinamico (titolo2) -->
                            <p>{{$titolo2}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terzo Riquadro -->
            <div class="col-md-6 mb-4">
                <div class="row g-0">
                    <div class="col-md-6">
                        <!-- Immagine del gioco Metal Gear Solid 3 -->
                        <img src="https://th.bing.com/th/id/OIP.ZYF3HqkG_h59sME8tOPSnAHaEL?rs=1&pid=ImgDetMain" class="img-fluid" alt="Image 3">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-4">
                            <h4> Metal Gear Solid 3 </h4>
                            <!-- Visualizzazione del titolo dinamico (titolo3) -->
                            <p>{{$titolo3}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quarto Riquadro -->
            <div class="col-md-6 mb-4">
                <div class="row g-0">
                    <div class="col-md-6">
                        <!-- Immagine del gioco Metal Gear Solid 4 -->
                        <img src="https://www.supanova.com.au/wp-content/uploads/2021/03/Metal-Gear-Solid-Solid-Snake-2-1024x852.jpg" class="img-fluid" alt="Image 4">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-4">
                            <h4> Metal Gear Solid 4 </h4>
                            <!-- Visualizzazione del titolo dinamico (titolo4) -->
                            <p>{{$titolo4}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Script per Bootstrap, per rendere funzionanti gli elementi interattivi come la navbar e il menu a tendina -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
