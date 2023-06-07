<?php
session_start(); // Начало сессии

if (!empty($_GET)) {
	// сохраняем значения параметров из гет запроса в сессию
    $_SESSION['name'] = $_GET['name']; 
	$_SESSION['surname'] = $_GET['surname']; 
	$_SESSION['age'] = $_GET['age']; 
	}
	//Дальше не паримся над дизайном
?>


<form action="" method="GET">
	
    <label for="name">Ваше имя</label>
    <input name="name" required><br>

    <label for="surname">Ваша фамилия</label>
    <input name="surname" required><br>

    <label for="age">Ваш возраст</label>
    <input name="age" required><br>

    <input type="submit"><br>
</form>
