<?php
if(isset($_POST['email'])) {

    header('Content-Type: text/html; charset=utf-8');

    //  E-MAIL
    $email_to = "biuro@deni.com.pl";
    $email_subject = "Wiadomosc ze strony deni.com.pl";


    function died($error) {
        // your error code can go here
        echo "Wprowadzone dane sa niepoprawne ";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['text'])) {
        died('Przepraszamy, wystąpił błąd z przetwarzaniem formularza.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $text = $_POST['text']; // required

    $email_message = "Wiadomość ze strony deni.com.pl\n\n";
    
    $email_message .= "Imię i Nazwisko: ".$name."\n";
    $email_message .= "E-mail: ".$email."\n";
    $email_message .= "Treść wiadomości: ".$text."\n";


$send_mail = @mail($email_to, $email_subject, $email_message);

}
?>

<p style="text-align: center; margin-top: 140px; font-size: 1.5em; font-family: Seoge UI;">Dziękujemy za wiadomość, wktótce się skontaktujemy.</p>

<?php
die();
?>
