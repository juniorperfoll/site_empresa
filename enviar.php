<?php
  @$enviar = $_POST["enviar"];
  if(isset($enviar)&&!empty($enviar)) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    include_once "phpmailer/PHPMailerAutoload.php";
    include_once "phpmailer/class.phpmailer.php";
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 4;
    $mailer->SMTPAuth = true;
    $mailer->SetLanguage("br");
    $mailer->Charset ="UTF-8";
    $mailer->Host = "smtp.gmail.com";
    $mailer->Port = 587;
    $mailer->Username = "suaconta@gmail.com";
    $mailer->Password = "suasenha";
    $mailer->IsHTML(true);
    $mailer->From = $email; //endereço remetente
    $mailer->FromName = $nome; //nome remetente
    $mailer->Subject = "Contato"; //assunto do e-mail
    $mailer->AddAddress("suaconta@gmail.com");
    $mailer->Body = $mensagem; //mensagem do email
    $enviou = $mailer->Send();
    //se enviar com sucesso retornar para a tela anterior
    if($enviou) { //se for verdadeiro
      echo "<script type='text/javascript'>";
         echo "alert('Enviado com Sucesso!');";
         echo "location.href='?pg=contato';";
      echo "</script>";
    }
  }
