<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resposta do Envio</title>
  </head>
  
  <body>
     <?php
     //recebendo os dados do formulário
	 $nome     = $_POST["tNome"];
	 $email    = $_POST["tEmail"];
	 $assunto  = $_POST["tAssunto"];
 	 $mensagem = $_POST["tMensa"];
	 $data_envio = date('d/m/Y');
     $hora_envio = date('H:i:s');
	 
	 //tratamento do assunto: 
	 if ($assunto == 1)
	    {
		 $assunto = "Anunciar no Site";	
		}
     else
	    {
		 if ($assunto == 2)
	       {
		    $assunto = "Perguntas";	
		   }
		   else
	        {
		      if ($assunto == 3)
	            {
		        $assunto = "Outros Assuntos";	
		        }
	    	}
		}
	 
	 //incluindo os campos no corpo da mensagem
	 $msg ="
	  <html>
        <table border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
             <td>Nome:</td>
			 <td>$nome</td>
          </tr>
          <tr>
             <td>E-mail:</td>
			 <td>$email</td>
          </tr>
          <tr>
             <td>Assunto:</td>
			 <td>$assunto</td>
          </tr>
          <tr>
             <td>Mensagem:</td>
			 <td>$mensagem</td>
          </tr>
        </table>        
		Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio
      </html>
      ";
	
	  // emails para quem será enviado o formulário
      $emailenviar = "rona.frei@yahoo.com.br";
      $destino = $emailenviar;
      $assunto = "Formulário Site EmpregaSantos";

	  // É necessário indicar que o formato do e-mail é html
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: <$nome>';
     //$headers .= "Bcc: $EmailPadrao\r\n";

     //enviando o email
	 if ( @mail( $destino , $assunto , $msg, $headers ))
	    {
		 echo "<script> alert ('Mensagem Enviada Com Sucesso!')</script>";
		 echo "<script> self.location='contato.php'</script>";	
	    }
	  else
	    {
	     echo "<script> alert ('Problemas no Envio da Mensagem') </script>"; 
	    }		 
	 ?>
  </body>
</html>