<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление площади квадрата</title>
</head>
<body>
    <h2>Вычисление площади квадрата</h2>
    <form method="post" action="">
        <label for="side">Длина стороны:</label>
        <input type="number" name="side" step="any" required><br><br>
        
        <label for="result">Результат:</label>
        <input type="text" name="result" value="<?php echo calculateArea(); ?>" readonly><br><br>
        
        <input type="submit" value="Вычислить">
    </form>

    <?php
    function calculateArea() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $side = $_POST["side"];
            // Формула площади квадрата: S = a * a
            $area = $side * $side;
            return $area;
        }
        return "";
    }
    ?>
</body>
</html>