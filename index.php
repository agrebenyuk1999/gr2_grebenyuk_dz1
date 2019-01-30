<?php 

// Task 1
// На стороне клинета выполняетя HTML и JS код, а PHP выполняется только на стороне сервера. PHP генерирует новую HTML страницу и сервер отсылает ее обратно клиенту с учетом php кода. 

// // Task 2
// define('PI', 3.14);
// // or
// const PI = 3.14;
// echo PI;


// // Task 3
// $int = 1; // INT
// $float = 32.123; // FLOAT
// $str = 'Hello World!'; // STRING
// $bool = true; // BOOLEAN


// // Task 4
// $news = [
// 	'title' => 'Новость1',
// 	'content' => 'Lorem Ipsum 213 lorem',
// 	'countViews' => 2523
// ];
// var_dump($news);


// // Task 4*
// $news = [
// 	[
// 		'title' => 'Новость1',
// 		'content' => 'Lorem Ipsum 213 lorem',
// 		'countViews' => 2523
// 	],
// 	[
// 		'title' => 'Новость2',
// 		'content' => 'Lorem Ipsum 213 lorem',
// 		'countViews' => 1321
// 	],
// 	[
// 		'title' => 'Новость3',
// 		'content' => 'Lorem Ipsum 213 lorem',
// 		'countViews' => 923
// 	],
// ];
// var_dump($news);


// // Task 5
// $int = 21;
// unset($int);
// // or
// $int = NULL;
// var_dump($int);


// // Task 6
// $int = 1;
// var_dump((string)$int);

// // Task 7
// $str = 'false';
// var_dump((bool)$str);

// // Task 8 
// $bool = true;
// var_dump((int)$bool);

// // Task 9
// $str = '123abcd';
// var_dump((int)$str);

// // Task 10
// echo 'Число пи (' . PI . ') - это константа';

// // Task 11
// $num1 = 5;
// $num2 = 10;
// $add = $num1 + $num2;
// $substract = $num1 - $num2;
// $multiply = $num1 * $num2;
// $divide = $num1 / $num2;
// echo $result = $substract;
// if ($result != $add && $result != $substract && $result != $multiply && $result != $divide) {
// 	echo "Неизвестный оператор";
// }

// // Task 11*
// $num1 = 5;
// $num2 = 2;
// $add = $num1 + $num2;
// $substract = $num1 - $num2;
// $multiply = $num1 * $num2;
// $divide = $num1 / $num2;
// $power = $num1 ** $num2;
// echo $result = $power;
// if ($result != $add && $result != $substract && $result != $multiply && $result != $divide && $result != $power) {
// 	echo "Неизвестный оператор";
// }

// // Task 12
// $limit = 10;
// $aliquot = 5;
// $i = 1;
// while ($i <= $limit) {
// 	if ($i % $aliquot == 0) {
// 		echo $i . '<br>';
// 	}
// 	$i++;
// }

// // Task 12*
// $limit = 10;
// $aliquot = 5;
// $count = 0;
// $i = 1;
// while ($i <= $limit) {
// 	if ($i % $aliquot == 0) {
// 		echo $i . '<br>';
// 		$count++;
// 	}
// 	$i++;
// }
// if ($count == 0) {
// 	echo "Нет кратных чисел";
// }

// // Task 13
// $news = [
// 	'title' => 'Новость1',
// 	'content' => 'Lorem Ipsum 213 lorem',
// 	'countViews' => 2523
// ];

// foreach ($news as $key => $value) {
// 	echo $key . ': ' . $value . '<br>';
// }

// // Task 14***
// $countExample = 3;
// $answerStatus = true;

// if ($answerStatus == true) {
// 	for ($i=0; $i < $countExample; $i++) { 
// 		$min = 0;
// 		$max = 99;
// 		$num1 = random_int( $min, $max );
// 		$num2 = random_int( $min, $max );
// 		$mathOperations =  [
// 			'plus' => '+',
// 			'minus' => '-',
// 			'multiply' => '*',
// 		];
// 		$randOperationArray = array_rand($mathOperations);
// 		$randOperation = ($mathOperations[$randOperationArray]);
// 		eval('$result = '.$num1.$randOperation.$num2.';');
// 		echo $num1 . $randOperation . $num2 . ' = ' . $result . '<br>';
// 	}
// }else {
// 	for ($i=0; $i < $countExample; $i++) { 
// 		$min = 0;
// 		$max = 99;
// 		$num1 = random_int( $min, $max );
// 		$num2 = random_int( $min, $max );
// 		$mathOperations =  [
// 			'plus' => '+',
// 			'minus' => '-',
// 			'multiply' => '*',
// 		];
// 		$randOperationArray = array_rand($mathOperations);
// 		$randOperation = ($mathOperations[$randOperationArray]);
// 		eval('$result = '.$num1.$randOperation.$num2.';');
// 		echo $num1 . $randOperation . $num2 . ' = ' . '__' . '<br>';
// 	}
// }

// Task 14*****
$countExample = 3;
$answerStatus = true;

if ($answerStatus == true) {
	for ($i=0; $i < $countExample; $i++) { 
		$min = 0;
		$max = 99;
		$num1 = random_int( $min, $max );
		$num2 = random_int( $min, $max );
		$mathOperations =  [
			'plus' => '+',
			'minus' => '-',
			'multiply' => '*',
		];
		$randOperationArray = array_rand($mathOperations);
		$randOperation = ($mathOperations[$randOperationArray]);
		eval('$result = '.$num1.$randOperation.$num2.';');
		$examples = [
			'num1' => $num1,
			'operation' => $randOperation,
			'num2' => $num2,
			'result' => $result
		];
		$randExamplesArray = array_rand($examples);
		$examples[$randExamplesArray] = '__';
		echo $examples['num1'] . $examples['operation'] . $examples['num2'] . ' = ' . $examples['result'] . '<br>';
	}
}else {
	for ($i=0; $i < $countExample; $i++) { 
		$min = 0;
		$max = 99;
		$num1 = random_int( $min, $max );
		$num2 = random_int( $min, $max );
		$mathOperations =  [
			'plus' => '+',
			'minus' => '-',
			'multiply' => '*',
		];
		$randOperationArray = array_rand($mathOperations);
		$randOperation = ($mathOperations[$randOperationArray]);
		eval('$result = '.$num1.$randOperation.$num2.';');
		$examples = [
			'num1' => $num1,
			'operation' => $randOperation,
			'num2' => $num2,
			'result' => $result
		];
		$randExamplesArray = array_rand($examples);
		$examples[$randExamplesArray] = '__';
		echo $examples['num1'] . $examples['operation'] . $examples['num2'] . ' = ' . '__' . '<br>';
	}
}
