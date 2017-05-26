<?php

// generowanie ID www
 function random_string($length) {
    $key_adam = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));
    for ($i = 0; $i < $length; $i++) {
        $key_adam .= $keys[array_rand($keys)];
    }
    return $key_adam;
}

$wwwID = random_string(8);
// koniec - generowanie ID www

// generowanie ID user
 function random_string3($length3) {
    $key_adam3 = '';
    $keys3 = array_merge(range(0, 9), range('a', 'z'));
    for ($i = 0; $i < $length3; $i++) {
        $key_adam3 .= $keys3[array_rand($keys3)];
    }
    return $key_adam3;
}

$userID = random_string(6);
// koniec - generowanie ID user

//tworzenie folderu do upload zdjec
$path = 'dz_bud/'.$wwwID.'-img';

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
// koniec - tworzenie folderu do upload zdjec

// koniec - tworzenie folderu do upload zdjec


//kopiowanie html'a (wzoru) nieoplacone
$file = "nieoplacone.html";
$newfile = "dz_bud/$wwwID.html";

if (!copy($file, $newfile)) {
    echo "failed to copy";
  }
//koniec kopiowanie html'a (wzoru) nieoplacone

//dodac wzor pojedynczej strony taki jak wyzej
$file = "ogloszenie.html";
$newfile = "dz_bud/$wwwID-ogloszenie.html";

if (!copy($file, $newfile)) {
    echo "failed to copy";
  }
//koniec kopiowanie html'a (wzoru) nieoplacone

// dodany mejl dla klienta
$name3 = strip_tags(htmlspecialchars($_POST['name']));
$typ_ogloszeniodawcy3 = strip_tags(htmlspecialchars($_POST['typ_ogloszeniodawcy']));
$email3 = strip_tags(htmlspecialchars($_POST['email']));
$phone3 = strip_tags(htmlspecialchars($_POST['phone']));
$gmina3 = strip_tags(htmlspecialchars($_POST['gmina']));
$obreb3 = strip_tags(htmlspecialchars($_POST['obreb']));
$dzialka3 = strip_tags(htmlspecialchars($_POST['dzialka']));
$tytul3 = strip_tags(htmlspecialchars($_POST['tytul']));
$typ_transakcji3 = strip_tags(htmlspecialchars($_POST['typ_transakcji']));
$cena3 = strip_tags(htmlspecialchars($_POST['cena']));
$powierzchnia3 = strip_tags(htmlspecialchars($_POST['powierzchnia']));
$zl_m23 = strip_tags(htmlspecialchars($_POST['zl_m2']));
$opis3 = strip_tags(htmlspecialchars($_POST['opis']));



$to2 = $_POST['email'];
$subject2 = "Potwierdzenie zgłoszenia.";
// tresc mejla z fundation-email

// Set content-type header for sending HTML email

$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers2 .= 'From: Asymetriko<asymetriko@gmail.com>' . "\r\n";
$headers2 .= 'Cc: welcome@example.com' . "\r\n"; //do wgladu
$headers2 .= 'Bcc: welcome2@example.com' . "\r\n"; //do wgladu ale ukryte przed odbiorca

// Send email
if(mail($to2,$subject2,$htmlContent2,$headers2)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;

// configure mejl do mnie
$from = 'Asymetriko <adam.butwin@gmail.com>';
$sendTo = 'Asymetriko <adam.butwin@gmail.com>';
$subject = 'Zgłoszenie standardowe dz. budowlane ID: '.$userID.' - '.$name3.'';
$fields = array('name' => 'Imię i nazwisko', 'typ_ogloszeniodawcy' => 'Typ ogłoszeniodawcy', 'phone' => 'Telefon','gmina' => 'Gmina/Miasto','obreb' => 'Obręb','dzialka' => 'Działka','tytul' => 'Tytuł','typ_transakcji' => 'Typ transakcji','powierzchnia' => 'Powierzchnia','cena' => 'Cena','zl_m2' => 'zł/m2', 'email' => 'Email', 'opis' => 'Opis'); // array variable name => Text to appear in email
$okMessage = 'Formularz został wysłany. Proszę sprawdzić swoją skrzynkę pocztową w celu dokończenia procesu.';
$errorMessage = 'Wystąpił błąd podczas wysyłania formularza. Proszę spróbować później';

// let's do the sending

try
{

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
