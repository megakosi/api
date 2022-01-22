<?php

$defaults = [

    "api_hash" => "ff0d2899f03fb8614eb5c5fb26d5bacd",
    "api_id"=> "4656589",
    "country_code" => "234",
    "duration_in_days" => 30000
];

$settings = [
    'maintenance' => false,
    "datetime_server"=>"uk.pool.ntp.org",
    "adder_numbers_file" => "numbers.txt",
    "support_line" => "+2347084419530 (WhatsApp)",
    "adding_history_file" => "history.txt",
    "init_txt_file" => "oti.txt",
    "phone_number_key" => "phone_number",
    "name_key" => "name",
	"username_key" => "username",
	"index_key" => "index",
	"spam_bot_username" => "SpamBot",
	"spam_bot_free_message" => "bird",
    "spam_bot_until_release_message" => "until",
    "join_chat_text" => "joinchat",
    "group_csv_file_name" => "Groups",
    "group_file_names_extension" => ".csv"
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
            'date_purchased' => 'May 28 2021  06:16AM',
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
            'api_hash' => 'b6e114490c4f091feb761f02093e7af8',
            'api_id' => 8883657,
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "2"=>
        [

            'owner_name' => 'Prince Eberechi',
            'date_purchased' => 'Feb 28 2021 2:08AM',
            'duration_in_days' => 9000000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' =>  '1d67c1cca2aaf0da774fe005f21ff3b2',
            'api_id' => 8692885,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],



    "demo"=>
        [

            'owner_name' => 'Kosi Eric',
            'date_purchased' => 'Sep 24 2021 12:07PM',
            'duration_in_days' => 30,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "1"=>
        [
            'owner_name' => 'Kosi Eric',
            'date_purchased' => 'Sep 24 2021 12:07PM',
            'duration_in_days' => 3000,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => true,
            'user_can_add_to_channels' => false
        ],


    "safe"=>
        [

            'owner_name' => 'Kosi Eric',
            'date_purchased' => 'Sep 30 2021 06:55AM',
            'duration_in_days' => 100000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "mike"=>
        [

            'owner_name' => 'Mike',
            'date_purchased' => 'Aug 22 2021  8:50PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "peter"=>
        [

            'owner_name' => 'Afolabi Peter',
            'date_purchased' => 'Jun 19 2021 09:10PM',
            'duration_in_days' => 1000000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' => '6dbdb1ef166e36bacc1a73931aaad920',
            'api_id' => 8209821,
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
            'date_purchased' => 'Jul 04 2021  12:29PM',
            'duration_in_days' => 10000000000000000000,
            'country_code' => $defaults['country_code'],
            'api_hash' => 'f4f7419a690d44f28f70ac01eacaea30',
            'api_id' => 3506343,
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "chima"=>
        [

            'owner_name' => 'GCN',
            'date_purchased' => 'Jun 06 2021  1:33AM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => "5318f2462654c9312032ea35678964a1",
            'api_id' => 3770831,
            'disabled' => false,
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
            'date_purchased' => 'Sep 24 2021  11:39PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => "332ed89002ac958e9548900c19f3999b",
            'api_id' => 3984497,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

	
    "leo"=>
        [

            'owner_name' => 'Leonard',
            'date_purchased' => 'Aug 16 2021  10:49PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "3"=>
        [

            'owner_name' => 'Skana',
            'date_purchased' => 'Sept 21 2021 08:37PM',
            'duration_in_days' => 14,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' =>  $defaults['api_id'],
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
		
		"101" => [
		
		'owner_name' => 'Victor',
            'date_purchased' => 'Oct 13 2021 10:42AM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => "59a4e4becdfa4e40f7fbc33a2edb498e",
            'api_id' => 8581462,
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
            'date_purchased' => 'Jun 11 2021 07:00AM',
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
            'date_purchased' => 'Aug 23 2021 01:20PM',
            'duration_in_days' => 90,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "peters2"=>
        [

            'owner_name' => 'Peters',
            'date_purchased' => 'Aug 23 2021 01:20PM',
            'duration_in_days' => 90,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "ahm"=>
        [

            'owner_name' => 'Ahm',
            'date_purchased' => 'Aug 23 2021 01:20PM',
            'duration_in_days' => 90,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "emmanuel"=>
        [

            'owner_name' => 'Anya Emmanuel',
            'date_purchased' => 'Oct 13 2021 06:55PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => "b7d7ff31095b958104b45f3196cccc5b",
            'api_id' => 7764282,
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],
	
	
	"jew"=>
        [

            'owner_name' => 'Jew Nonse',
            'date_purchased' => 'Jun 07 2021 09:55PM',
            'duration_in_days' => 50,
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false

        ],

    "manuelz"=>
            [

                'owner_name' => 'Manuelz',
                'date_purchased' => 'Dec 12 2021  03:55AM',
                'duration_in_days' => 40,
                'country_code' => $defaults['country_code'],
                'api_hash' => 'e4c9bbf33d08cc9e8582e07c549c0c95',
                'api_id' => 6047362,
                'disabled' => false,
                'user_can_add_to_channels' => false
            ],

    "m"=>
        [

            'owner_name' => 'Manuelz',
            'date_purchased' => 'Dec 12 2021  03:55AM',
            'duration_in_days' => 40,
            'country_code' => $defaults['country_code'],
            'api_hash' => 'e4c9bbf33d08cc9e8582e07c549c0c95',
            'api_id' => 6047362,
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],
    "bright"=>
        [

            'owner_name' => 'Lil Bright',
            'date_purchased' => 'Jul 08 2021  09:26AM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "david"=>
        [

            'owner_name' => 'David',
            'date_purchased' => 'Jul 10 2021  06:26PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],
		
		"jeff"=>
        [

            'owner_name' => 'Jeff',
            'date_purchased' => 'Sep 24 2021 11:05PM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ],

    "4"=>
        [

            'owner_name' => 'Destiny',
            'date_purchased' => 'Sept 21 2021  02:35AM',
            'duration_in_days' => $defaults['duration_in_days'],
            'country_code' => $defaults['country_code'],
            'api_hash' => $defaults['api_hash'],
            'api_id' => $defaults['api_id'],
            'disabled' => false,
            'user_can_add_to_channels' => false
        ]





];

