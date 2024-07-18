<?php 

$name = "ali";

$family = "sadeghi";

$age = 4;

$fullName = $name . " " . $family;

// echo $fullName ;

/*

echo "<br />";
*/
// echo $name;


 /******************** data types start *********************/
 // string
//  var_dump("salam");
//  echo "<br />";
 
// int
//  var_dump(123);
//  echo "<br />";
 
// boolean
//  $a = false; 
//  var_dump($a);
//  echo "<br />";


// array
// $array = array("a",'b','c',5,6,4,78);
// var_dump($array);

// null
// $car = null;
// var_dump($car);

 /******************** data types end *********************/





// echo gettype($name);



exit;

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "title from php" ?></title>
    <script src="cdn-tailwind.js"></script>
</head>
<body class="bg-red-500">
    <p>
        my name is : <?php echo $name ?>
    </p>

    <input type="text" name="" id="" value="<?php echo $name ?>">
    <input type="text" name="" id="" value="<?= $name ?>">


</body>
</html>


<!-- <?php ?> -->

<!-- <?php echo $fullName ?> -->
<!-- <?= $fullName ?> -->


