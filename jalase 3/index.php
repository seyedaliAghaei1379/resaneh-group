<?php

function inspect($a){
    echo "<pre>";
    var_dump($a);
    echo "</pre>";
}

// echo "hi";


// indexed arrayes 
$number = [10,20,30,40,50,60,70];
// var_dump($number);
// echo $number[3]

// associative Arrays 
// $user = array("name" => "amir" , "family" => "abbasi" , "age" => 24 , "status" => true);
$user = ["name" => "amir" , "family" => "abbasi" , "age" => 24 , "status" => true];



// inspect($user);
// echo $user['family']; 
// inspect($user['family'])  ;

// print_r($user['family']);
// echo "<br />";
// print $user['family'];



// $users = array(
//     ["name" => "ali", "age" => 20],
//     ["name" => "reza", "age" => 21],
//     ["name" => "milad", "age" => 22]
// );

// inspect($users);

// // milad 
// inspect($users[2]['name']);
// inspect($users[1]['age']);


$time = 4;

// var_dump($time);

// 1 between 6 good morning
// 7 between 12 good afternoon
// 12 between 24 good night
//  24 < x  // failed


// && AND
// ||  OR


if($time > 0 and $time <= 6 ){
    echo "good morning";    
}elseif($time > 6 && $time < 13 ){
    echo "good afternoon";
}
elseif($time > 12  && $time <= 24){
    echo "good night";
}else{
    echo "failed";
}






?>