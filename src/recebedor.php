<?php

$arquivo = $_FILES['arquivo'];
if (isset($_FILES['arquivo']) AND empty($_FILES['arquivo']) == false) {
	move_uploaded_file($arquivo['tmp_name'], "C://xampp\htdocs\php-intermediario\m3-basic-banco-de-dados-pdo\upload-arquivosphp\src".$arquivo['name']);
	echo "Arquivo enviado com sucesso!";
}else{
	echo "Nao foi possivel enviar o arquivo!";
}

