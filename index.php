<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il 
nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale
 (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente 
(es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
 Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
In allegato uno screenshot qualora non aveste l'ispirazione creativa! :arte:
Confermate lettura come al solito e buon weekend! -->
<?php

?>
<!doctype html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1><strong>Srong Password Generator</strong></h1>
        <h2>Genera una password sicura</h2>
    </header>
    <main>
        <div class="container">
            <div class="row ">
                <div class="col">
                    <div class="">
                        <p>Nesun parametro valido inserito</p>
                    </div>
                </div>
                <div class="col">
                    <form action="">
                        <div>
                            <p>Lunghezza password:</p>
                            <p>Consenti ripetizioni di uno o più caratteri:</p>
                        </div>
                        <div>

                            <div>
                                <label for="password_lenght"></label>
                                <input type="text" name="password_lenght" id="password_lenght">
                            </div>

                            <div>
                                <input type="radio" name="true" id="true" value="true">
                                <label for="true">Si</label>
                            </div>

                            <div>
                                <input type="radio" name="false" id="false" value="false">
                                <label for="false">No</label>
                            </div>

                            <div>
                                <input type="checkbox" name="words" id="words">
                                <label for="words">Lettere</label>
                            </div>

                            <div>
                                <input type="checkbox" name="numbers" id="numbers">
                                <label for="numbers">Numeri</label>
                            </div>

                            <div>
                                <input type="checkbox" name="simbols" id="simbols">
                                <label for="simbols">Simboli</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>