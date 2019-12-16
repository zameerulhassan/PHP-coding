<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <form>
        <input type="text" name="num1" value="" placeholder="entre first number">
        <input type="text" name="num2" value="" placeholder="entre second number">
        <br>
            <select name="operator">
                <option value="None">None</option>
                <option value="Add">Add</option>
                <option value="Subtract">Subtract</option>
                <option value="Multiply">Multiply</option>
                <option value="Divide">Divide</option>
            </select>
        <br>
        <button type="submit" value="submit" name="submit">Calculate</button>
    </form>
    <br>
    <p>The Answer is : </p>

    <?php 
        if(isset($_GET['submit'])){
            $num1=$_GET['num1'];
            $num2=$_GET['num2'];
            $opt=$_GET['operator'];
            switch($opt){
                case "None":
                echo "No operator is entered";
                break;
                case "Add":
                echo $num1 + $num2;
                break;
                case "Multiply":
                echo $num1 * $num2;
                break;
                case "Subtract":
                echo $num1 - $num2;
                break;
                case "Divide":
                echo $num1 / $num2;
                break;
                default:
            }
        }
    ?>
</body>
</html>