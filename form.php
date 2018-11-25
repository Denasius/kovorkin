<?php

if ( !empty($_POST) ) {
	$recepient = "info@cw1.by";
	$sitename = "Коворкинг №1";
	$name = !empty(htmlspecialchars(trim($_POST["name"]))) ? htmlspecialchars(trim($_POST["name"])) : '========';
	$phone = !empty(htmlspecialchars(trim($_POST["phone"]))) ? htmlspecialchars(trim($_POST["phone"])) : '=======';
	$email = !empty(htmlspecialchars(trim($_POST["email"]))) ? htmlspecialchars(trim($_POST["email"])) : '=======';
	$message = "Имя: $name \nТелефон: $phone \nE-mail: $email";
	$pagetitle = "Новая заявка с сайта \"$sitename\"";
	mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
	}

 ?>