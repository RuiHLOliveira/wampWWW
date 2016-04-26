<?php
    $name     =   $_POST['nome'];
    $email    =   $_POST['email'];
    $cidade  =   $_POST['cidade']; 
    $comentario  =   $_POST['comentario'];
 
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

       $subject = "Comentário Site";  
       $corpo = "Formulário enviado\n";
       $corpo .= "Nome: " . $name . "\n";
       $corpo .= "Email: " . $email . "\n";
	   $corpo .= "Cidade: " . $cidade . "\n";
       $corpo .= "Comentários: " . $comentario . "\n";
     
       $email_to = 'allandefan@gmail.com'; 
    $status = mail($email_to, $subject, $corpo, $headers); 

	if($status) {
		echo "<script> alert('Formulário enviado com sucesso!'); </script>"; 
	}
	else {
		echo "<script alert('Falha ao enviar o FOrmulário.'); </script>";
	}
	echo "<script> window.location.href = 'contato.html'; </script>"; 
?>