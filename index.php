<?php
    $inp1 = "";
    $inp2 = "";
    $ans = "";

    if (isset($_POST['Add'])) {
        $inp1 = $_POST['num1'];
        $inp2 = $_POST['num2'];
        // $ans = $_POST['num1'] + $_POST['num2'];
        $ans = $inp1 + $inp2;
        // $ans = 1 + 2;
    }
    if (!isset($_POST['Add'])) {
        $ans = " ";
    }
    if (isset($_POST['Subtract'])) {
        $inp1 = $_POST['num1'];
        $inp2 = $_POST['num2'];
        // $ans = $_POST['num1'] + $_POST['num2'];
        $ans = $inp1 - $inp2;
        // $ans = 1 + 2;
    }
    if (isset($_POST['Multiply'])) {
        $inp1 = $_POST['num1'];
        $inp2 = $_POST['num2'];
        // $ans = $_POST['num1'] + $_POST['num2'];
        $ans = $inp1 * $inp2;
        // $ans = 1 + 2;
    }
    if (isset($_POST['Divide'])) {
        $inp1 = $_POST['num1'];
        $inp2 = $_POST['num2'];
        // $ans = $_POST['num1'] + $_POST['num2'];
        $ans = $inp1 / $inp2;
        // $ans = 1 + 2;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <!-- Php Calculator -->
    <section class="php_calc">
        <h1>Php Calculator</h1>
        <form action="index.php" method="POST">
            <div class="div1">
                <input type="number" name="num1" id="num1" value="<?php echo($inp1)?>" placeholder="Your first number">
                <input type="number" name="num2" id="num2" value="<?php echo($inp2)?>" placeholder="Your second number">
            </div>
            <div class="div2">
                <input type="submit" value="Add" name="Add">
                <input type="submit" value="Subtract" name="Subtract">
                <input type="submit" value="Multiply" name="Multiply">
                <input type="submit" value="Divide" name="Divide">
            </div>
        </form>
        <div class="div3">
            <h1>Your Result: &nbsp&nbsp&nbsp&nbsp<?php echo($ans)?></h1>
            <h3></h3>
        </div>
    </section>

    <!-- <section>
        Oluyo Calculator
    </section> -->

    <section class="JS_calc">
        <h1>Javascript Calculator</h1>
        <div>
            <div class="div1">
                <input type="number" id="inp1" placeholder="Your first number">
                <input type="number" id="inp2" placeholder="Your second number">
            </div>
            <div class="div2">
                <button id="submit" onclick="add()">Add</button>
                <button id="submit" onclick="subtract()">Subtract</button>
                <button id="submit" onclick="multiply()">Multiply</button>
                <button id="submit" onclick="divide()">Divide</button>
            </div>
        </div>
        <div class="div3">
            <h1>Your Result: &nbsp&nbsp&nbsp<span id="ans"></span></h1>
            <h3></h3>
        </div>
    </section>
    <!-- <script src="action.js"></script> -->
    <script>
        // function add() {
        //     var inp1 = document.getElementById('inp1').value
        //     var inp2 = document.getElementById('inp2').value
        //     let ans = int(inp1) + int(inp2);
        //     document.getElementById('ans').innerHTML = ans;
        // }
        // function subtract() {
        //     inp1 = document.getElementById('inp1').value
        //     inp2 = document.getElementById('inp2').value
        //     var ans = inp1 - inp2;
        //     document.getElementById('ans').innerHTML = ans;
        // }
        // function multiply() {
        //     inp1 = document.getElementById('inp1').value
        //     inp2 = document.getElementById('inp2').value
        //     var ans = inp1 * inp2;
        //     document.getElementById('ans').innerHTML = ans;
        // }
        // function divide() {
        //     inp1 = document.getElementById('inp1').value
        //     inp2 = document.getElementById('inp2').value
        //     var ans = inp1 / inp2;
        //     document.getElementById('ans').innerHTML = ans;
        // }        
    </script>
</body>
</html>