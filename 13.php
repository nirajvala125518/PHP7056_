<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="Enter first number" required step="any">
        
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        
        <input type="number" name="num2" placeholder="Enter second number" required step="any">
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    
    function calculateResult($n1, $n2, $op) {
        switch ($op) {
            case 'add':
                return $n1 + $n2;
            case 'subtract':
                return $n1 - $n2;
            case 'multiply':
                return $n1 * $n2;
            case 'divide':
                if ($n2 == 0) {
                    return "Error: Division by zero!";
                }
                return $n1 / $n2;
            default:
                return "Invalid Operation";
        }
    }


    if (isset($_POST['calculate'])) {
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        $operation = $_POST['operation'];

        $result = calculateResult($number1, $number2, $operation);


        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>