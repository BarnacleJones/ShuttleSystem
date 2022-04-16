<?php  
    
//create an array from the form data
$datae = array();
$datae[] = array(
    'Name' => $_POST['name'],
    'Day' => $_POST['dayPick'],
    'Time' => $_POST['timePick'],
);;

//get the contents of the json
$jsonName = file_get_contents('BookShuttle.json');

//decode them, put them in an array
$tempArray = json_decode($jsonName);

//push form data array into array
array_push($tempArray, $datae);

//json encode the tempArray
$jsonData = json_encode($tempArray);

//put all contents into the json
file_put_contents('BookShuttle.json', $jsonData);

//say success (should include go back button if works)
echo "Success";

?>