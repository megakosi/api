<?php

$defaults = [

    "api_hash" =>
        "a0868f60474d9b119b8c5e42d8a7c682",
    "api_id"=> "2688055",
    "country_code" => "234",
    "duration_in_days" => 30
];

$settings = [
    'maintenance' => false,
    "datetime_server"=>"ng.pool.ntp.org",
    "adder_numbers_file" => "numbers.txt",
    "support_line" => "+2347084419530 (WhatsApp)",
    "adding_history_file" => "history.txt",
    "init_txt_file" => "oti.txt",
    "phone_number_key" => "phone_number",
    "name_key" => "name",
	"username_key" => "username",
	"index_key" => "index"
];



$clients = [

    "joseph"=>
        [

            'owner_name' => 'Joseph Ibhafidon',
            'date_purchased' => 'May 14 2021  08:49PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => true,
            'user_can_add_to_channels' => false
        ],
	
	"itunes" => [
		'owner_name' => 'Itunes',
            'date_purchased' => 'May 27 2021  06:16AM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => '38d84b33ab537f065faebc7f09f89283',
            'api_id' => 5620753,
            'disabled' => false,
            'user_can_add_to_channels' => false
		],

    "sochima"=>
        [

            'owner_name' => 'Sochima',
            'date_purchased' => 'Apr 22 2021  1:33PM',
            'duration_in_days' => 50000000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' => 'e49f55661c56c931fc993ceed03671a8',
            'api_id' => 4001523,
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "prince"=>
        [

            'owner_name' => 'Prince Eberechi',
            'date_purchased' => 'Feb 28 2021  2:08AM',
            'duration_in_days' => 900000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' => '',//$defaults['api_hash'],
            'api_id' => '',//$defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],


    "megakosi"=>
        [

            'owner_name' => 'Kosi Eric',
            'date_purchased' => 'Feb 24 2021  1:33PM',
            'duration_in_days' => 3000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
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
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => 'e3ef75900b0d1331c76925a7d1bb3374',
            'api_id' => 3348402,
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "ugo"=>
        [

            'owner_name' => 'Opara Ugochukwu',
            'date_purchased' => 'Apr 29 2021  12:29PM',
            'duration_in_days' => $defaults['duration_in_days'],
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
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => "5318f2462654c9312032ea35678964a1",
            'api_id' => 3770831,
            'disabled' => true,
            'user_can_add_to_channels' => false

        ],


    "raba"=>
        [

            'owner_name' => 'RABA',
            'date_purchased' => 'May 09 2021  1:00AM',
            'duration_in_days' => $defaults['duration_in_days'],
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
            'date_purchased' => 'May 1 2021 12:39PM',
            'duration_in_days' => $defaults['duration_in_days'],
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
            'duration_in_days' => $defaults['duration_in_days'],
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
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => "6754e94404789c852c33eba62bc08fec",
            'api_id' => 4559238,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "martins"=>
        [

            'owner_name' => 'Martins',
            'date_purchased' => 'May 09 2021 03:32PM',
            'duration_in_days' => 15,
            'country_code' => $defaults['country_code'],
            'api_hash' => "7be115d8ae08ec807727e6ac0c2550b4",
            'api_id' => 2147292,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],


    "rath"=>
        [

            'owner_name' => 'Rath',
            'date_purchased' => 'May 04 2021 07:00AM',
            'duration_in_days' => 30,
            'country_code' => $defaults['country_code'],
            'api_hash' => "ef4e0c0d4db0f49746fd4e8ae5ac0577",
            'api_id' => 4145591,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],


    "peters"=>
        [

            'owner_name' => 'Peters',
            'date_purchased' => 'May 07 2021 05:00AM',
            'duration_in_days' => 30,
            'country_code' => $defaults['country_code'],
            'api_hash' => "3d3d780503829db95019613ac74d919c",
            'api_id' => 3443029,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "emmanuel"=>
        [

            'owner_name' => 'Anya Emmanuel',
            'date_purchased' => 'May 07 2021 06:55PM',
            'duration_in_days' => 30,
            'country_code' => $defaults['country_code'],
            'api_hash' => "cfc3fe203e58ce9c3f8ebd0e1f9f295f",
            'api_id' => 5223902,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ]






];

