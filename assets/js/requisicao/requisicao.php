<?php
$ReqPOST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$Json['error'] = true;
$Nome = $ReqPOST["dados"][0]["value"];
$telefone = $ReqPOST["dados"][1]["value"];
$celular = $ReqPOST["dados"][2]["value"];
$cpf = $ReqPOST["dados"][3]["value"];
$convenio = $ReqPOST["dados"][4]["value"];
//incluir a classe PHPMailer
include_once 'PHPMailer/class.smtp.php';
include_once 'PHPMailer/class.phpmailer.php';

//enviando o e-mail utilizando a classe PHPMailer
$Mailer = new PHPMailer;
$Mailer->Charset = 'utf-8';
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = 'gapconnectconsultoria.com.br';
$Mailer->SMTPAuth = true;
$Mailer->Username = 'contato@gapconnectconsultoria.com.br';
$Mailer->Password = 'gap123'; 
$Mailer->Port = 25;
$Mailer->Priority = 1; 
$Mailer->FromName = ($Nome);
$Mailer->From = 'contato@gapconnectconsultoria.com.br'; 
$Mailer->AddAddress("guilherme@gapconnectconsultoria.com.br");
$Mailer->AddAddress("paulo@gapconnectconsultoria.com.br");
$Mailer->IsHTML(true);
$Mailer->Subject = "Cliente - {$Nome}".date(" d/m/Y");
$Mailer->Body = "
<html>
    <head>
    <meta charset='utf-8'>
    </head>
    <body>
        <h1>Mensagem recebida atraves do site </h1>
        <p>Nome do cliente:<strong>  {$Nome} </strong><br/></p>
        <p>telefone:<strong> {$telefone} </strong><br/></p>
        <p>celular: <strong> {$celular} </strong><br/></p>
        <p>CPF: <strong> {$cpf} </strong><br/></p>
        <p>Convenio:<strong> {$convenio} </strong><br/></p>
    </body>
</html>";
//Verificação
if($Mailer->Send()){
    $Json['error'] = false;
}

echo json_encode($Json);
?>