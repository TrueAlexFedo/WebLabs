<!DOCTYPE html>
//установлены отступы и переводы строк для улучшенной читаемости,
//добавлены идентефикаторы для значений переменных
//
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .my-select {
            width: 100px;
            height: 30px;
        }
    </style>
</head>
<body>
    <form action="db.php" method="post">
        <label for="email">Ваш email:</label>
        <input type="email" name="email" required><br>
        
        <label for="title">Название объявления:</label>
        <input type="text" name="title" required><br>
        
        <label for="description">Текст объявления:</label>
        <textarea name="description" rows="10" required></textarea><br>
        
        <label for="category">Категория:</label>
        <select name="category" required class="my-select">
            <?php
            $categories = array("car", "bicycles", "electric_scooter");
            foreach ($categories as $category) {
                echo "<option value=\"$category\">$category</option>";
            }
            ?>
        </select><br>
        
        <input type="submit" value="Save" class="my-button"><br>
        <br>
    </form>
</body>
</html>
