<?php
// Define o endereço para onde a mensagem será enviada
$to = "develentino@gmail.com"; 
$subject = "Nova Mensagem do Portfólio de Fábio Lentino";

// Coleta os dados do formulário
$name = htmlspecialchars($_POST['Nome']);
$email = htmlspecialchars($_POST['_replyto']);
$message = htmlspecialchars($_POST['Mensagem']);

$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$email_body = "Nome: $name\n";
$email_body .= "E-mail: $email\n\n";
$email_body .= "Mensagem:\n$message";

// Envia o e-mail
if (mail($to, $subject, $email_body, $headers)) {
    // Redireciona o usuário para uma página de sucesso
    header('Location: index.html');
    exit;
} else {
    // Caso de falha
    echo "Erro ao enviar a mensagem.";
}
?>
