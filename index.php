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

$passwordlenght = isset($_GET['password_lenght']) && is_numeric($_GET['password_lenght']) ? $_GET['password_lenght'] : 0;
/* var_dump($passwordlenght);
 */
$if_words = isset($_GET['words']) ? true : false;
$if_simbols = isset($_GET['simbols']) ? true : false;
$if_numbers = isset($_GET['numbers']) ? true : false;
/* $if_repeat = !empty($_GET['repeat']) ? (boolval($_GET['repeat']) ? true : false): 'error';
 */
if (isset($_GET['repeat'])) {
    $if_repeat = boolval($_GET['repeat']);
    /*  var_dump($if_repeat,'sono dentro');
 */
}

var_dump($if_repeat); /*
 *//* if ($if_repeat == 'true') {
    $if_repeat == boolval($if_repeat);
}elseif ($if_repeat == 'false') {
    $if_repeat == boolval($if_repeat);
} */
/* echo 'ci sono numeri ? = ';
echo $if_numbers;
echo ' , ci sono lettere ? = ';
echo $if_words;
echo ' , ci sono simboli ? = ';
echo $if_simbols;
echo ' , ci sono ripetizioni  ? = ';
echo $if_repeat;
echo ' , c è una lunghezza di password ? = ';
echo (isset($_GET['password_lenght']));
echo ' , la lunghezza è un numero ? = ';
echo (is_numeric($passwordlenght));
echo ' , quanto è lunga la password = ';
echo ($passwordlenght); */
$chars_Word = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$chars_Number = "0123456789";
$chars_Simbol = "!@$%^&*#()-_+={}[]\|;:',./?";
include_once __DIR__ .  "/functions/functions.php";
$charsTot = chois_charstot($if_words, $chars_Word) . chois_charstot($if_simbols, $chars_Simbol) . chois_charstot($if_numbers, $chars_Number);
/* echo ' , caratteri per generare la password sono = ';
echo $charsTot; */
if (!empty($passwordlenght)) {
    control_repeat($if_repeat, $passwordlenght, $charsTot);
    echo ($_SESSION["pass"]);
    header('Location: ./viewpassword.php');
}
/* echo ' ,la password generata è = ';
echo $password; */




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
    <header class="bg-dark p-5">
        <h1 class="text-center text-black-50"><strong>Srong Password Generator</strong></h1>
        <h2 class="text-center text-white my-0">Genera una password sicura</h2>
    </header>
    <main class=" bg-dark p-5">
        <div class="container p-3 my-0">
            <div class="row flex-column align-items-center">
                <div class="col-8 card m-4 bg-light">
                    <div class="alert-success ">
                        <p class="text-success">Nesun parametro valido inserito</p>
                    </div>
                </div>
                <form action="" method="get" class="col-8 card  d-flex justify-content-center p-3">
                    <div class="col d-flex ">
                        <div class="px-5">
                            <p>Lunghezza password:</p>
                            <p>Consenti ripetizioni di uno o più caratteri:</p>
                        </div>
                        <div class="px-5">
                            <!-- Lunghezza password -->
                            <div>
                                <label for="password_lenght"></label>
                                <input type="text" name="password_lenght" id="password_lenght">
                            </div>

                            <div>
                                <input type="radio" name="repeat" id="true" value="1">
                                <label for="true">Si</label>
                            </div>

                            <div>
                                <input type="radio" name="repeat" id="false" value="0">
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
                    </div>
                    <div class="col px-5">
                        <button type="submit" class="btn btn-primary">invia</button>
                        <button type="reset" class="btn btn-light">Annulla</button>
                    </div>


                </form>
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