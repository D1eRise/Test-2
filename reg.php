<?php

$result = [
	"status" => '',
	"message" => ''
];

$users = [
	[
		"firstName" => "Артём",
		"secondName" => "Сафонов",
		"email" => "example1@mail.ru",
		"password" => "qwerty123"
	],
	[
		"firstName" => "Андрей",
		"secondName" => "Капитанов",
		"email" => "example2@mail.ru",
		"password" => "qwerty123"
	]
];

if ($_POST['email'] && $_POST['password'] && $_POST['confPass']) {
	$userEmail = trim(mb_strtolower($_POST["email"]));
	foreach ($users as $user) {
		if ($user["email"] === $userEmail) {
			file_put_contents('registration.log', 'Проверка завершилась неудачно (пользователь с таким электронным адресом уже существует).' . PHP_EOL, FILE_APPEND);
			$result["status"] = "error";
			$result["message"] = "Пользователь с таким электронным адресом уже существует!";
		}
	}
    	if ($result["status"] != "error") {
    		$password = $_POST["password"];
        	if ($password != $_POST["confPass"]) {
        		file_put_contents('registration.log', 'Проверка завершилась неудачно (пароли не совпадают).' . PHP_EOL, FILE_APPEND);
        		$result["status"] = "error";
        		$result["message"] = "Пароли не совпадают!";
        	} else {
        		file_put_contents('registration.log', 'Проверка завершилась успешно.' . PHP_EOL, FILE_APPEND);
        		$result["status"] = "success";
        	}
    	}
} else {
	file_put_contents('registration.log', 'Проверка завершилась неудачно (не все обязательные поля заполнены).' . PHP_EOL, FILE_APPEND);
	$result["status"] = "error";
	$result["message"] = "Не все обязательные поля заполнены!";
}  

echo json_encode($result);
