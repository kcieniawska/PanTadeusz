<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Tadeusz</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <header class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pan Tadeusz</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Strona główna</a>
              </li>
            </ul>
          </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <nav>
                        <span class="fs-5 p-3 d-none d-sm-inline">Spis treści</span>
                        
                        <div class="position-sticky">
                            <ol class="nav flex-column">
                                <?php 
                                    for ($i = 1; $i <= 12; $i++) 
                                    {
                                        echo '<li class="nav-item"><a class="nav-link" href="?book=' . $i . '">Księga ' . $i . '</a></li>';
                                    }
                                ?>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col py-3">
                <h1 class="text-center container p-5">Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem.</h1>
                
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-5">
                    
                    <?php
                        // Warunek dla strony index.php
                        if (!isset($_GET['book'])) 
                        {
                            echo '<div class="text-center mb-0"><img src="img/tadeusz.jpg" alt="Obraz"></div>';
                        }
                        // Sprawdzenie, czy parametr book jest ustawiony
                        if (isset($_GET['book'])) 
                        {
                            // Pobranie numeru księgi z parametru book
                            $bookNumber = $_GET['book'];
                            // Weryfikacja, czy numer księgi mieści się w zakresie od 1 do 12
                            if ($bookNumber >= 1 && $bookNumber <= 12) 
                            {
                                // Wyświetlenie treści księgi
                                $bookContent = file_get_contents("k$bookNumber.html");
                                echo $bookContent;
                            } 
                        }
                    ?>
                </main>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-body-tertiary text-center text-lg-start" data-bs-theme="dark">
        <div class="text-center p-3" style="color: rgba(255, 255, 255, 1);">
           Akademia Nauk Stosowanych w Nowym Targu © 2023 Karolina Cieniawska
        </div>
    </footer>
</body>
</html>
