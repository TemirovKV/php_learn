<?php

$fields = [
	'email' => [
		'type' => 'email',
		'field_name' => 'Email',
		'required' => 1,
	],
	'phone_num' => [
		'type' => 'phone',
		'field_name' => 'Номер телефона',
		'required' => 1,
	],
	'phone_num2' => [
		'type' => 'phone',
		'field_name' => 'Дополнительный номер телефона',
		'required' => 0,
	],
	'surname' => [
		'type' => 'text',
		'field_name' => 'Фамилия',
		'required' => 1,
	],
	'name' => [
		'type' => 'text',
		'field_name' => 'Имя',
		'required' => 1,
	],
	'patronymic' => [
		'type' => 'text',
		'field_name' => 'Отчество',
		'required' => 0,
	],
	'day' => [
		'type' => 'day',
		'field_name' => 'День',
		'required' => 0,
	],
	'month' => [
		'type' => 'month',
		'field_name' => 'Месяц',
		'required' => 0,
	],
	'year' => [
		'type' => 'year',
		'field_name' => 'Год',
		'required' => 0,
	],
	'gender' => [
		'type' => 'gender',
		'field_name' => 'Пол',
		'required' => 0,
	],
];
