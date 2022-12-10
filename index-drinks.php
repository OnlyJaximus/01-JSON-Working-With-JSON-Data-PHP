<?php
echo "<pre>";
echo file_get_contents('drinks.json');

// {
//     {
//         "name"  : "coffee",
//         "temp"  : "hot",
//         "price" : 1.75
//     },
//     {
//         "name"  : "tea",
//         "temp"  :  "hot",
//         "price" : 1.5
//     },
//     {
//         "name"  : "apple juice",
//         "temp"  : "cold",
//         "price" : 1.5
//     }
// }
// We are going to decode it and convert it into a format the PHP can understand and work with
// because on its own we can't loop through this JSON data and pull somne of these values and display them on-screen
// So, we need to change it into something the PHP can work with such as array

$drinks = file_get_contents('drinks.json');

// $drinks = json_decode($drinks); // decoding the contents of this variable 
$drinks = json_decode(file_get_contents('drinks.json'));


// echo $drinks;  // echo fun isn't going to give us the full array it's just going to tell us, hey this is an array 
// echo "<pre>";
// print_r($drinks);
// echo "</pre>";

// foreach ($drinks as $drink) {
//     echo '<li>' . $drink->name . ' $' . $drink->price . '</li>';
// }


// ************************** dogs.json ****************************************

echo "<pre>";
//echo file_get_contents('dogs.json');  // dobijamo citav json objekat iz ddogs.json

//echo  json_decode(file_get_contents('dogs.json'));  // Array with echo sa greskom  Warning:  Array to string conversion in sto znaci da trebano da korstimo print_r

$dogs  = json_decode(file_get_contents('dogs.json'));
//print_r($dogs);


foreach ($dogs as $dog) {

    //$age = round($dog->age / 12, 2);
    $age = round($dog->age / 12);

    if ($age < 1) {
        $age = "just a little dog a few ";
    }



    if ($dog->fur->sheds == true) {
        $sheds = ' that sheds.';
    } else {
        $sheds = ' that  does NOT sheds,';
    }

    if ($dog->tricks->come == true) {
        $come = "the dog obeys the command to come.";
    } else {
        $come = "the dog DDOES NOT listen to the command to come.";
    }


    // echo "<li>Dog Name: " . $dog->name . ', Dog Color: ' . $dog->fur->color . "</li><br>";
    // echo "<li>" . ucfirst($dog->name) . ' is a ' . $dog->breed . "</li><br>";
    //echo "<li>" . ucfirst($dog->name) . ' is a ' . $dog->age . " years old " .  $dog->breed . "</li><br>";
    echo "<li>" . ucfirst($dog->name) . ' is a ' . $age . " months old " .  $dog->breed . ', with ' . $dog->fur->length . ' ' . $dog->fur->color . " fur" .   $sheds . " and " . $come . " </li><br>";
    echo "<hr><br>";
}
