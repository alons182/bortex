<?php 
	$data =  $_POST;

	$uploaddir = '../images/uploads/';
	$nombre = $_FILES["uploadBtn"]["name"];
    $extension = pathinfo($nombre, PATHINFO_EXTENSION);
	
	//'. $_SERVER['REQUEST_URI'] .'/uploads/'.basename($_FILES['uploadBtn']['name'].
	$result = 'ok';
	if(trim($_POST['nombre']) === '') {
		$result = 'Error - falta el campo nombre';
	}else{
		$name = trim($_POST['nombre']);
	}
	if(trim($_POST['email']) === '') {
		$result = 'Error - falta el campo email';
	}else{
		$email = trim($_POST['email']);
	}
	if(trim($_POST['descripcion']) === '') {
		$result = 'Error - falta el campo comentarios';
	}else{
		$comments = trim($_POST['descripcion']);
	}
	$nombre_final = basename('archivo_'.substr(sha1(rand(1,999999)),0,-30).'_'.substr($name,0,3).'_'.date("Ymd").'.'.$extension);

	$link = '<a href="'.$_SERVER['HTTP_HOST'] .'/images/uploads/'.$nombre_final.'" title="Imagen">'.$nombre_final.'</a>';
	
	$uploadfile = $uploaddir . $nombre_final;

	function checkFileExtension($ext)
	{
	    if ($ext == 'ai' || $ext == 'pdf' || $ext == 'jpg' || $ext == 'jpeg' || $ext ==
	        'gif' || $ext == 'eps' || $ext == 'tif' || $ext == 'png' || $ext == 'xls' || $ext ==
	        'xlsx' || $ext == 'doc' || $ext == 'docx' || $ext == 'ppt' || $ext == 'pptx' ||
	        $ext == 'zip' || $ext == 'rar' || $ext == 'sitx' || $ext == 'psd' || $ext ==
	        'indd' || $ext == 'dng') {
	        $pass = (int)1;
	    } else {
	        $pass = (int)0;
	    }
	    return (int)$pass;
	}


$ext = substr(strrchr($_FILES['uploadBtn']['name'], "."), 1);
$fileAccepted = checkFileExtension($ext);
$fileSize = $_FILES['uploadBtn']['size'];

       
   if ($fileAccepted==1 && $fileSize <= 209715200) { 
   	
    	if (move_uploaded_file($_FILES['uploadBtn']['tmp_name'], $uploadfile)) {
	   		

	   		
	

			if($result=='ok'){
				$emailTo = 'ventas@bortexcr.com';
			    $subject = 'Desde el formulario de Archivo del Sitio Bortex - Submitted message from '.$name;
			    
			    $body = '<html><body>';
				$body .= '<img src="http://www.bortexcr.com/templates/bortex/img/logo_mail.png" alt="Bortex" />';
				$body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$body .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
				$body .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
				$body .= "<tr><td><strong>Descripción:</strong> </td><td>" . strip_tags($comments) . "</td></tr>";
				$body .= "<tr><td><strong>URL del Archivo:</strong> </td><td>" . $link . "</td></tr>";
				$body .= "</table>";
				$body .= "</body></html>";
			    $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email . "\r\nCC:".$email."\r\n". "MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=utf-8\r\n";


			    mail($emailTo, $subject, $body, $headers);
			        
			    
			    
			}

			$data = array('message' => 'Archivo subido Exitosamente.');

	   
		} else {
		   $data = array('message' => 'Error al subir el archivo. Verifique que no sobrepase el limite de 64mb');
		}
    }else
   		 $data = array('message' => 'Error Archivo Muy grande o tipo invalido');
	
	

	//$file = 
	//echo $data['email'] .' - '. $_FILES['uploadBtn']['name'];;
   		
	echo json_encode($data);
?>