<?php



       if (($sender_email == "") || ($sender_name == "") || ($message == "")) {

                header("Location: show_flash_form.html");

                exit;

       }





       $recipient = "faleconosco@barbatur.com.br"; //email recipiente

       $subject = "Formulario";      //assunto da mensagem



       $mailheaders = "From: <$sender_email> \n";

       $mailheaders .= "Reply-To: <$sender_email>\n\n";



       $msg = "De:   $sender_name\n";

       $msg .= "Email: $sender_email\n";

       $msg .= "Messagem:         $message\n\n";



       mail($recipient, $subject, $msg, $mailheaders) or die ("Impossivel enviar email!");



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">

<HTML>

<HEAD>
<TITLE>flashy mail: send form</TITLE>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</HEAD>



<BODY BGCOLOR="#FFFFFF" TEXT="#000000">

<div id="Layer1" style="position:absolute; left:54px; top:290px; width:61px; height:27px; z-index:1"><a href="http://www.barbatur.com.br/">Voltar</a></div>
<div align=center>



<p class=h2>Email enviado!</p>



<P>Obrigado, <?php echo "$sender_name"; ?> (<?php echo "$sender_email"; ?>), por ter enviado esta mensagem:</p>

<P><?php echo "$message"; ?></p>



</div>



</body>

</html>

