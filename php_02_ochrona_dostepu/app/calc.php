<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
$result=0.00;
$m = 0;
$x = $_REQUEST ['x'] ?? ' ';
$y = $_REQUEST ['y'] ?? ' ';
$z = $_REQUEST ['z'] ?? ' ';


// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($z) )){
    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
    $messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
    $messages [] = 'Nie podano liczby 1';
}
if ( $y == "") {
    $messages [] = 'Nie podano liczby 2';
}
if ( $z == "") {
    $messages [] = 'Nie podano liczby 3';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {

    // sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $x )) {
        $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $y )) {
        $messages [] = 'Druga wartość nie jest liczbą całkowitą';
    }

    if (! is_numeric( $z )) {
        $messages [] = 'Trzeia wartość nie jest liczbą całkowitą';
    }

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów

    //konwersja parametrów na int
    $x = intval($x);
    $y = intval($y);
    $z = intval($z);

    //wykonanie operacji
    if ($z <= 0) {
        $result = $x / ($y * 12);
    } else {
        $result = ($x * (($z / 100) / 12) * ((1 + (($z / 100) / 12)) ** ($y * 12))) / (((( 1 + ($z / 12 / 100)) ** ($y * 12))) - 1);
    }

    $result = round($result, 2);

}




// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';