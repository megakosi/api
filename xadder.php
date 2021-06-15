<?php
date_default_timezone_set('Africa/Lagos');
require 'clients.php';
require 'db.php';
global $clients, $settings,$servername, $username, $password, $dbname;


if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'){
    die();
}
elseif(isset($_GET['computer']) and !empty($_GET['computer'])){

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

    $conn = new mysqli($servername, $username, $password, $dbname);

    $user = $conn->real_escape_string(strtolower($_GET['user']));
    $source_group = $conn->real_escape_string($_GET['source_group']);
    $target_group = $conn->real_escape_string($_GET['target_group']);


    $sql = "SELECT * FROM clients WHERE username = '$user'";

    $sql_result = $conn->query($sql);

    $assoc = $sql_result->fetch_assoc();

    $source_groups = $assoc['source_groups'];
    $target_groups = $assoc['target_groups'];
    $activity_count = (int)$assoc['activity_count'];
    $activity_count+= 1;
    $now = date('Y-m-d H:i:s');


    $source_groups_array = explode(',', $source_groups);

    $target_groups_array = explode(',', $target_groups);

    array_push($source_groups_array, $source_group);
    array_push($target_groups_array, $target_group);
	
	
	$source_groups_array = array_unique($source_groups_array);
	$target_groups_array = array_unique($target_groups_array);


    $new_source_groups = implode(',', $source_groups_array);
    $new_target_groups = implode(',', $target_groups_array);


    $sql = "UPDATE clients SET source_groups = '{$new_source_groups}', target_groups = '{$new_target_groups}', 
                   activity_count='{$activity_count}',
    last_seen='{$now}' WHERE username='{$user}'";

    if ($conn->query($sql) === TRUE) {
        echo "success";

    }



}

