
// Antonio Hernandez
// INF 653
// GET parameter Assignment
// 2 - 2 - 23
<br><br>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Parameter Assignment</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php
        // first name, last name, age
        $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
        // Hello, my name is [firstname] [lastname].
        echo "Hello, my name is $firstname $lastname.<br/><br/>";
        // This statement is conditional based on the [age] parameter.
        if ($age >= 18) {
            echo "I am $age years old and I am old enough to vote in the United States.<br/><br/>";
        } else {
            echo "I am $age years old and I am not old enough to vote in the United States.<br/><br/>";
        }
        // calculate days based on number for age
        $numofdays = $age * 365;
        echo "Numbers of days based on the number given for age is $numofdays . <br/><br/>";
        // add current date to page
        $date = date('Y-m-d H:i:s');
        echo $date;
    ?>
</body>

</html>
