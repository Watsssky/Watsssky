
<?php
include('connect.php');
        
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

// echo "<p> Имя " . $name . "</p>";
//echo "<p> Возраст " . $age . "</p>";
//echo "<p> ЗП " . $salary . "</p>";

$query = "INSERT INTO user SET 
name='$name', 
age='$age', 
salary='$salary'";

$res = mysqli_query($link, $query) or die(mysqli_error($link));
if ($res) {
    echo "Данные успешно сохранены!";
    header('Location: index.php');
} else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
}
?>