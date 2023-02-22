<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <p>Results:</p>
    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None" :
                    echo "Error";
                break;
                case "+" :
                    echo $result1 + $result2;
                break;
                case "-" :
                    echo $result1 - $result2;
                break;
                case "*" :
                    echo $result1 * $result2;
                break;
                case "/" :
                    echo $result1 / $result2;
                break;
            }
        }
    ?>
</body>
</html>