<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доска объявлений</title>
</head>
<body>
    <!-- Форма для добавления объявления -->
    <form action="lab3a.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email"><br>
        <label for="category">Категории</label>
        <select name="category" required>
            <?php
            // Получаем список категорий
            $categories = scandir("categories");
            foreach ($categories as $category) {
                // Пропускаем специальные точки (текущую директорию и родительскую директорию)
                if ($category != "." && $category != "..") {
                    // Создаем опцию для каждой категории
                    echo "<option value=\"$category\">$category</option>";
                }
            }
            ?>
        </select><br>
        <label for="title">Заголовок объявления</label>
        <input type="text" name="title" required><br>
        <label for="description">Текст объявления</label>
        <textarea name="description" id="" cols="40" rows="10" required></textarea><br>
        <input type="submit" value="Сохранить">
    </form>

    <!-- Таблица с объявлениями -->
    <table> 
        <thead>
            <th>Категория</th> 
            <th>Заголовок</th> 
            <th>Описание</th> 
        </thead>
        <?php
        // Получаем список категорий
        $categories = scandir("categories");
        foreach ($categories as $category) {
            // Пропускаем специальные точки (текущую директорию и родительскую директорию)
            if ($category != "." && $category != "..") {
                // Получаем список объявлений в каждой категории
                $announcements = scandir("categories/$category");
                foreach ($announcements as $announcement) {
                    // Пропускаем специальные точки (текущую директорию и родительскую директорию)
                    if ($announcement != "." && $announcement != "..") {
                        // Получаем заголовок и описание объявления
                        $title = pathinfo($announcement, PATHINFO_FILENAME);                                      
                        $description = file_get_contents("categories/$category/$announcement");
                        // Выводим информацию об объявлении в таблицу
                        echo "<tr><td>$category</td><td>$title</td><td>$description</td></tr>";
                    }
                }
            }
        }
        ?>
    </table>
</body>
</html>
