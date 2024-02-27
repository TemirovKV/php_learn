<?php

function debug($data)
{
	echo '<pre>' . print_r($data, 1) . '</pre>';
}

//функция сохранения данных
function load($data)
{
	foreach ($_POST as $key => $value) {
		//проверка на наличие ключа, на случай подделки данных
		if (array_key_exists($key, $data))
		{
			$data[$key]['value'] = trim($value);
		}
	}
	return $data;
}

function validate($data, $type)
{
	switch ($type)
	{
		case 'email':
			return filter_var($data, FILTER_VALIDATE_EMAIL) ? 'true' : "Неправильно ведён email";
		break;

		case 'phone':
			return isValidPhone($data);
		break;

		case 'text':
			return filterText($data);
		break;

		default:
			return 'true';
	}
}

function searchErrors($data)
{
	$errors = [];
	foreach ($data as $key => $value)
	{
		if ($data[$key]['required'] && empty($data[$key]['value']))
		{
			$errors[$key] = "Пустое поле";
		}
		else if (!$data[$key]['required'] && empty($data[$key]['value']))
		{
			continue;
		}
		else
		{
			$errors[$key] = validate($data[$key]['value'], $data[$key]['type']);
		}
	}
	return $errors;
}

function isValidPhone($phone)
{
	// Удаляем все не символы кроме цифр
	$phone = preg_replace('/\D/', '', $phone);

	// Длиной 11 символов
	if (strlen($phone) !== 11)
	{
		return 'В номере не 11 цифр';
	}
	
	// Номер должен начинаться на цифру 7
	if (substr($phone, 0, 1) !== '7')
	{
		return 'Номер не начинается с 7';
	}

	return 'true';
}

function filterText($field){
	$pattern = '/^([А-Яа-я]+\s)*([А-Яa-я]+)\s*$/u';

	// Санитизация имени пользователя
	$field = filter_var(trim($field), FILTER_UNSAFE_RAW);

	// Валидация имени пользователя
	if(preg_match($pattern, $field))
	{
		return 'true';
	}
	else
	{
		return 'Невалидный текст';
	}
}

//require __DIR__ . '/data.php';

// function send_mail()
// {
//     $to = $fields['email']['value'];
//     $subject = 'Success register';
//     $message = 'hallou';

//     mail($to, $subject, $message);
// }


// echo json_encode([
// 	'success' => true,
// 	'id' => 10,
// ]);

// echo json_encode([
// 	'success' => false,
// 	'errors' => [
// 		'phone' => 'Не правильный формат',
// 		'email' => 'Не правильный формат',
// 	]
// ]);
