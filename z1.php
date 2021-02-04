<?php
/*
Тестовое задание:
Задача 1. PHP
Написать функцию на PHP, которая вернет для заданного массива c числами $haystack, 
номер элемента массива, наиболее близкий к переданному значению $needle. 
Для равноудалённых элементов выбор не принципиален.
a) Массив имеет произвольные значения
b) Значения элементов массива расположены по возрастающей

Ответ:
Классический скрипт бинарного поиска...
*/
  function search(int $elem, array $data): int
	{
		$pbegin = $begin = 0;
		$pend = $end = count($data) - 1;

		while (1) {
			$pos = round(($begin + $end) / 2);

			if (isset($data[$pos])) {
				if ($data[$pos] == $elem)
					return $pos;

				if ($data[$pos] > $elem)
					$end = floor(($begin + $end) / 2);
				else
					$begin = ceil(($begin + $end) / 2);
			}

			if ($pbegin == $begin && $pend == $end)
				return $pos;

			$pbegin = $begin;
			$pend = $end;
		}
	}

	$haystack = [1,3,5,6,7,8,9,11,14,16,17,19,22,25,28];
	$needle = 12;
	echo '<pre>Array: '.print_r($haystack, true).
		'<br/>Needle: '.$needle.
		'<br/>Key: '.search($needle, $haystack).'</pre>';

