<?php
$html = "
    <form action='/form.php' method='POST'>
        <input type='text' name='email' placeholder='Voer je email adres in'/>
        <input type='submit' name='submit' />
    </form>
    ";
echo($html);

$email = "";

if (isset($_POST['submit'])) {
    if (!empty($_POST["email"])) {
        $email = $_POST["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("<h1>E-mailadres is geldig</h1>");
        } else {
            echo("<h1>$email is geen geldig e-mailadres</h1>");
        }
    }
}



?>