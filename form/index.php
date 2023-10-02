<!DOCTYPE html>
<html>
<head>
    <title>Форма ввода данных</title>
</head>
<body>
    <?php
    // Проверяем, были ли отправлены данные формы
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем данные из полей формы
        $name = $_POST["name"];
        $email = $_POST["email"];
        
        // Выводим введенные данные
        echo "Вы ввели следующую информацию:<br>";
        echo "Имя: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
    
    <h2>Форма ввода данных</h2>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Имя:</label>
        <input type="text" name="name"><br>
        
        <label>Email:</label>
        <input type="email" name="email"><br>
        
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
