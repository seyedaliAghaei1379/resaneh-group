<?php 
function inspect($a){
    echo "<pre>";
    var_dump($a);
    echo "</pre>";
}

// for($i = 0 ; $i < 10 ; $i++){
//     echo $i;
// }

// $i = 16;
// while($i < 15){
//     inspect($i);
//     // echo $i . "<br />";
//     $i++;
// }

// do{
//     inspect($i);
//     // echo $i . "<br />";
//     $i++;
// }while($i < 15);



// foreach 

// $users = ["ali" , "reza" , "milad" , "asghar"];


// inspect($users);

// $users[] = "nima"; // اضافه کردن عنصر
// unset($users[1]); // حدف عنصر 
// $key = array_search("milad" , $users); // جستجو عنصر

// inspect($key); 

// foreach($users as $user){
//     inspect($user);
// }   

// $ages = [
//     "ali" => 20,
//     "reza" => 30,
//     "milad" => 15
// ];

// foreach($ages as $person => $age){
//     // inspect($person);
//     // inspect($age);
//     echo $age . "<br />";
// }

// foreach($)


$persons = [
    ["id" => 1 , "fullname" => ["name" => "ali" , "family" => "taghavi"] , "age" => 25],
    ["id" => 2 , "fullname" => ["name" => "mina" , "family" => "mohammadi"] , "age" => 30],
    ["id" => 3 , "fullname" => ["name" => "elaheh" , "family" => "fariba"] , "age" => 25],
    ["id" => 4 , "fullname" => ["name" => "morteza" , "family" => "sadati"] , "age" => 20],
    ["id" => 5 , "fullname" => ["name" => "aram" , "family" => "taghavi"] , "age" => 40],
    ["id" => 6 , "fullname" => ["name" => "parsa" , "family" => "taghavi"] , "age" => 16],
    ["id" => 7 , "fullname" => ["name" => "asghar" , "family" => "taghavi"] , "age" => 25],
];

// inspect($persons);

// $id = $persons[0]["id"];
// $fullName = $persons[0]["fullname"]["name"]  . " " . $persons[0]["fullname"]["family"];
// $age = $persons[0]["age"];
// inspect($fullName);

// $text = "id : " .  $persons[0]["id"] ;

// echo $text;


foreach($persons as $person){
    // echo  "hi" . "<br />";
    // inspect($person);
    // inspect($person["age"]);
    $fullName = $person['fullname'];
    inspect($fullName['name']);


}





