<?php
   if(isset($_POST['submit'])) 
   {
      echo("Your appeal has been submitted, thank you.");
   }else{
       echo("Please go away.");
       error_reporting(0);
   }
?>


<?php

// Replace the URL with your own webhook url
$url = "https://canary.discordapp.com/api/webhooks/562995073915027456/MjKgsASuZFqm9Hratj2sv_CKeafywkOUQ778DZRNvolmwl86c5H6H67PUBSLbb_Jj9s5";

$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "",
    /*
     * The username shown in the message
     */
    "username" => "ApexPvP Appeals",
    /*
     * The image location for the senders image
     */
    "avatar_url" => "https://cdn.discordapp.com/icons/480080452141449234/b2f71108872bf5cc7f6373bef4840b0e.jpg",

    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "Appeal submitted",

            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",

            // A description for your embed
            "description" => "Someone has submitted an appeal, please review it.",

            // The integer color to be used on the left side of the embed
            "color" => hexdec( "33F6FF" ),

            // Footer object
            "footer" => [
                "text" => "Made by Ufo#8033"
            ],

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "IGN",
                    "value" => $_POST['ign'],
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "Discord User",
                    "value" => $_POST['discorduser'],
                    "inline" => true
                ],
                // Field 3
                [
                    "name" => "Type",
                    "value" => $_POST['type'],
                    "inline" => false
                ],
                // Field 4
                [
                    "name" => "Reason",
                    "value" => $_POST['reason'],
                    "inline" => false
                ],
                // Field 5
                [
                    "name" => "Length",
                    "value" => $_POST['length'],
                    "inline" => false
                ],
                // Field 6
                [
                    "name" => "Reason to be unbanned",
                    "value" => $_POST['unban_reason'],
                    "inline" => false
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Length" => strlen( $hookObject ),
        "Content-Type" => "application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>