<?php
    $inp1 = " ";
    $inp2 = " ";
    $ans = " ";

    if (isset($_POST['Add'])) {
        $inp1 = $_POST['num1'];
        $inp2 = $_POST['num2'];
        // $ans = $_POST['num1'] + $_POST['num2'];
        $ans = $inp1 + $inp2;
        // $ans = 1 + 2;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="num1" id="num1" value="<?php echo($inp1)?>">
        <input type="text" name="num2" id="num2" value="<?php echo($inp2)?>">
        <input type="submit" value="Add" name="Add">
    </form>
    <div>
        <?php echo($ans)?>
    </div>
</body>
</html>