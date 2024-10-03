<?php
if(isset($_GET["btnExercise2"])){
    header("location: Group Exercise 2/sad.html");
}
else if (isset($_GET["btnExercise3"])){
    header("location: Group Exercise 3/grp2_micaelaguzar_ex3.php");
}
else if (isset($_GET["btnExercise4"])){
    header("location: Group Exercise 4/grp.php");
}
else if (isset($_GET["btnExercise5"])){
    header("location: Group Exercise 5/info.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2</title>
</head>
<style>
    body {
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        
        /* The center-box contain form, input, button */
        .center-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 350px;
            width: 350px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        form {
            width: 100%;
            margin-bottom: 20px;
        }

        input {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input {
            background-color: #006494;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input:hover {
            background-color: #004a6f;
        }
</style>
<body>
<div class="center-box">
<h2>EXERCISES</h2>
<p><strong>Pick one exercise you want to proceed</strong></p>
    <form>
        <input type="submit" name="btnExercise2" value="Exercise2">
        <input type="submit" name="btnExercise3" value="Exercise3">
        <input type="submit" name="btnExercise4" value="Exercise4">
        <input type="submit" name="btnExercise5" value="Exercise5">
    </form>
</div>
    
</body>
</html>