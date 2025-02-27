<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <button type="submit">Generate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["num"]);
        echo "<h2>Multiplication Table for $num</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= $num; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $num; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
