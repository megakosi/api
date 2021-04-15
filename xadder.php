<?php

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST'){
    die();
}


$defaults = [
            
             "api_hash" => 
             "a0868f60474d9b119b8c5e42d8a7c682", 
             "api_id"=> "2688055",
             "country_code" => "234"
             ];
             
$settings = [
    'maintenance' => false, 
    "datetime_server"=>"ng.pool.ntp.org",
    "adder_numbers_file" => "numbers.txt",
     "support_line" => "+2347084419530 (WhatsApp)",
     "adding_history_file" => "history.txt"
    ];


             
$clients = [
    "joseph"=>
    [
    
        'owner_name' => 'Joseph Ibhafidon',
        'date_purchased' => 'Apr 10 2021  1:33PM',
        'duration_in_days' => 50,
        'country_code' => $defaults['country_code'],
        'api_hash' => $defaults['api_hash'],
        'api_id' => $defaults['api_id'],
        'disabled' => true,
        'user_can_add_to_channels' => false
    ],
    
    "prince"=>
    [
    
        'owner_name' => 'Prince Eberechi',
        'date_purchased' => 'Feb 28 2021  2:08AM',
        'duration_in_days' => 3000,
        'country_code' => $defaults['country_code'],
        'api_hash' => $defaults['api_hash'],
        'api_id' => $defaults['api_id'],
        'disabled' => false,
        'user_can_add_to_channels' => false

    ],
    
    
    "megakosi"=>
    [
    
        'owner_name' => 'Kosi Eric',
        'date_purchased' => 'Feb 24 2021  1:33PM',
        'duration_in_days' => 3000000000,
        'country_code' => $defaults['country_code'],
        'api_hash' => '7188b0174fba74e15a2dc4d205791ab3',
        'api_id' => 3952070,
        'disabled' => false,
        'user_can_add_to_channels' => false
    ],
    
    "peter"=>
    [
    
        'owner_name' => 'Afolabi Peter',
        'date_purchased' => 'Apr 13 2021  1:33PM',
        'duration_in_days' => 60,
        'country_code' => $defaults['country_code'],
        'api_hash' => '7188b0174fba74e15a2dc4d205791ab3',
        'api_id' => 3952070,
        'disabled' => false,
        'user_can_add_to_channels' => false
    ],
    
    "kris"=>
    [
    
        'owner_name' => 'OG Hustler',
        'date_purchased' => 'Mar 3 2021  12:29PM',
        'duration_in_days' => 30,
        'country_code' => $defaults['country_code'],
        'api_hash' => 'e3ef75900b0d1331c76925a7d1bb3374',
        'api_id' => 3348402,
        'disabled' => false,
        'user_can_add_to_channels' => false
    ],
    
    "ugo"=>
    [
    
        'owner_name' => 'Opara Ugochukwu',
        'date_purchased' => 'Mar 3 2021  12:29PM',
        'duration_in_days' => 50,
        'country_code' => $defaults['country_code'],
        'api_hash' => 'f4f7419a690d44f28f70ac01eacaea30',
        'api_id' => 3506343,
        'disabled' => false,
        'user_can_add_to_channels' => false
    ],
    
    "chima"=>
    [
    
        'owner_name' => 'GCN',
        'date_purchased' => 'Mar 11 2021  1:33PM',
        'duration_in_days' => 100,
        'country_code' => $defaults['country_code'],
        'api_hash' => "5318f2462654c9312032ea35678964a1",
        'api_id' => 3770831,
        'disabled' => false,
        'user_can_add_to_channels' => false
    
    ],
    
    
     "raba"=>
    [
    
        'owner_name' => 'RABA',
        'date_purchased' => 'Apr 10 2021  7:45AM',
        'duration_in_days' => 60,
        'country_code' => $defaults['country_code'],
        'api_hash' => "5318f2462654c9312032ea35678964a1",
        'api_id' => 3770831,
        'disabled' => false,
        'user_can_add_to_channels' => false
    
    ],
    
     "edikan"=>
    [
    
        'owner_name' => 'VICTOR MARTINS',
        'date_purchased' => 'Mar 19 2021  9:29PM',
        'duration_in_days' => 60,
        'country_code' => $defaults['country_code'],
        'api_hash' => "332ed89002ac958e9548900c19f3999b",
        'api_id' => 3984497,
        'disabled' => false,
        'user_can_add_to_channels' => false
    
    ],
    
     "skana"=>
    [
    
        'owner_name' => 'Skana',
        'date_purchased' => 'Mar 30 2021 12:39PM',
        'duration_in_days' => 60,
        'country_code' => $defaults['country_code'],
        'api_hash' => "71901ed466a77bb6a51dba015c568fa1",
        'api_id' => 3775369,
        'disabled' => false,
        'user_can_add_to_channels' => false
    
    ],
    
    
     "china_man"=>
    [
    
        'owner_name' => 'China Man',
        'date_purchased' => 'Apr 04 2021 08:04AM',
        'duration_in_days' => 60,
        'country_code' => $defaults['country_code'],
        'api_hash' => "c79e2c3d99e8465ecdafbd889d627013",
        'api_id' => 3350554,
        'disabled' => false,
        'user_can_add_to_channels' => false
    
    ],
    
      "austin"=>
    [
    
        'owner_name' => 'Austin',
        'date_purchased' => 'Apr 15 2021 10:42AM',
        'duration_in_days' => 60,
        'country_code' => $defaults['country_code'],
        'api_hash' => "6754e94404789c852c33eba62bc08fec",
        'api_id' => 4559238,
        'disabled' => false,
        'user_can_add_to_channels' => false
    
    ]
    
    
    
    
    ];
    
    
    
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
    
    $result['computer'] = (in_array($user, ["megakosi", "prince", "skana"])) ? $computer : $assoc['computer'];
    
    echo json_encode($result);

?>
