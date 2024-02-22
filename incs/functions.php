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
