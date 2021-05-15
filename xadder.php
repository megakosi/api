<?php

require 'clients.php';
global $clients;
global $settings;


if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'){
    die();
}
elseif(isset($_GET['user']) and !empty($_GET['user'])){
$servername = "localhost";
$dbname = "kosizcoq_kosizcoq";
$username = "kosizcoq_kosizcoq";
$password = "4mdcfohb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$user  = $conn->real_escape_string(strtolower($_GET['user']));
$computer = $conn->real_escape_string(strtolower($_GET['computer']));



$client = $clients[$user];



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM clients WHERE username = '$user'";


$result = $conn->query($sql);

if ($result->num_rows == 0) {

    $sql = "INSERT INTO clients(id, username, computer)
            VALUES(0, '{$user}', '{$computer}')";

    if ($conn->query($sql) === TRUE) {}

    //else {
    //echo "Error: " . $sql . "<br>" . $conn->error};


}

$sql = "SELECT * FROM clients WHERE username = '$user'";

$sql_result = $conn->query($sql);

$assoc = $result->fetch_assoc();



$result = array_merge($client, $settings);

$result['computer'] = (in_array($user, ["megakosi", "prince"])) ? $computer : $assoc['computer'];

echo json_encode($result);
}

else{

    $info = json_decode(strtolower($_GET['info']));

}

