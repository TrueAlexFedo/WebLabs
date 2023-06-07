<?php
session_start();
//заполняем  массив сессии переменными из гет
if (!empty($_GET)) {
    $_SESSION['array'] = $_GET;
}
?>

<form action="" method="GET">
    <label for = "name">Ваше имя</label>
        <input name="name" required><br>
    <label for = "surname">Ваша фамилия</label>
	    <input name="surname" required><br>
    <label for = "age">Ваш возраст</label>
        <input name="age" required><br>
    <label for = "contacts">Ваши контакты</label>
		<input name="contacts" required><br>
	<input type="submit"><br>
	
</form>