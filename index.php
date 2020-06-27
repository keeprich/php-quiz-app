<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>
<body>


<style>
body, html {
    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(29,253,107,0.6026785714285714) 25%, rgba(252,176,69,1) 100%);}

   h2, strong {
        text-align:center;
        color:red;
        padding:3px;
    }
</style>

<?php

$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$correct = 0;
if(!empty($_POST)) {
    if ($ans1 == 5){
        $correct ++;
    }else{
        echo"<h2> <strong>can't Add</strong></h2>";
    }

    if ($ans2 == 4){
        $correct ++;
    }else{
        echo"<h2> <strong>can't Subtract</strong></h2>";

    }

    if ($ans3 == 10){
        $correct ++;
    }else{
        echo"<h2> <strong>can't Multiply</strong></h2>";
    }

    if ($ans4 == 4){
        $correct ++;
    }else{
        echo"<h2> <strong>can't Divide</strong></h2>";
    }

    echo "<p>You Got $correct correct!</p>";
$grade = ($correct / 4) *100;
if($correct == 0) {
    echo "<p>Not Good</p>";
}elseif($correct == 1) {
    echo "<p>Have to work Hard</p>";
}elseif($correct == 2) {
    echo "<p>Good</p>";
}elseif($correct == 3) {
    echo "<p>Very Good</p>";
}else {
    echo "<p>Excellent</p>";
}

}else {
    echo "<p>Please take the quiz.</p>";
}

?>
   <section class="section">
    <div class="container">
    <h1>Quiz App</h1>
    <form action="index.php" method="post">
    <p>What is 2 + 3?</p>
    <input class="input" name="ans1" type="number" placeholder="Enter Answer">  
      <p>What is 5 - 1?</p>
      <input class="input" name="ans2" type="number" placeholder="Enter Answer">  
    <p>What is 2 * 5?</p>
    <input class="input" name="ans3" type="number" placeholder="Enter Answer">  
    <p>What is 20 &#247; by 5?</p>
    <input class="input" name="ans4" type="number" placeholder="Enter Answer">  
    <p>Submit test</p>
    <br><br><br>
    <input type="submit">
    </form>
    </div>
    </section>
</body>
</html>