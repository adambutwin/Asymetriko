<?php
$name3 = strip_tags(htmlspecialchars($_POST['name']));
// configure mejl do mnie
$from = 'Asymetriko <adam.butwin@gmail.com>';
$sendTo = 'Asymetriko <adam.butwin@gmail.com>';
$subject = 'Wiadomość z asymetriko kontakt od: '.$name3.'';
$fields = array('name' => 'Imię i nazwisko', 'typ_ogloszeniodawcy' => 'Typ ogłoszeniodawcy', 'phone' => 'Telefon','gmina' => 'Gmina/Miasto','obreb' => 'Obręb','dzialka' => 'Działka','tytul' => 'Tytuł','typ_transakcji' => 'Typ transakcji','powierzchnia' => 'Powierzchnia','cena' => 'Cena','zl_m2' => 'zł/m2', 'email' => 'Email', 'opis' => 'Wiadomość'); // array variable name => Text to appear in email
$okMessage = 'Wiadomość została wysłana';
$errorMessage = 'Wystąpił błąd podczas wysyłania formularza. Proszę spróbować później';

// let's do the sending

try
{
    $emailText = "Nowa wiadomość z formularza kontaktowego\n=============================\n\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";

        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
