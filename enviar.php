<?php
function sendMail($de,$para,$mensaje,$asunto){
    require 'phpmailer/class.phpmailer.php';
      $mail = new PHPMailer;

      $mail->IsSMTP();
      try {
      $mail->SMTPAuth   = true;
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPSecure = "tls";
      $mail->Port       = 587;
      $mail->Username   = 'qwerty.870403@gmail.com';
      $mail->Password   = '@qwerty870403';
      $mail->SetFrom($de);
      $mail->AddAddress($para);
      $mail->Subject = $asunto;
      $mail->MsgHTML($mensaje);
      $mail->Send();
      $envio = true;
      } catch (phpmailerException $e) {
        $envio = false;
      } catch (Exception $e) {
        $envio = false;
      }
      return $envio;

}
?>
