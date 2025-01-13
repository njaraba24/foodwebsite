<?php
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    //getting the form data
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = trim(string: $_POST["message"]);

    //validating the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
}

    //setting the recipient email

    $to = "evanmaina609@gmail.com";

    $subject = "Message contact  form";

    $email_content = "Email: $email\r\n";
    $email_content = "Message:\r\n $message\r\n";

    //setting up email headers
    $headers = "From: $email";

    //send the email

    if (mail($to, $subject, $message, $email_content, $headers)){
        echo "Message sent successfully";
    }else{
        echo "OOPS! something wrong happened";
    }

}else{
    echo "invalid Request";
}

phpinfo();

?>