<?php 
$dir=__dir__;
    $DB = new database("localhost", "root", "", "edu.27");
    $data=[];
    $data['proj_name']='Universite Web';
    $data['name']='education université';
    $data['short_name']='education universite';
    $data['owner']='Bachir Zahaf';
    $data['auteur']='Bachir Zahaf';
    $data['copyright']='Copyright © 2020 Bachir Zahaf';
    $data['version']='2.0';
    $groupe=[
        [
            "first name" => "Anja",
            "last name" => "Doe",
            "img" => "team1.jpg",
            "job" => "Art Director",
            "description" => "Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum."
        ],
        [
            "first name" => "John",
            "last name" => "Doe",
            "img" => "team2.jpg",
            "job" => "CEO &amp; Founder",
            "description" => "Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum."
        ],
        [
            "first name" => "Mike",
            "last name" => "Ross",
            "img" => "team3.jpg",
            "job" => "Web Designer",
            "description" => "Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum."
        ],
        [
            "first name" => "Dan",
            "last name" => "Star",
            "img" => "team4.jpg",
            "job" => "Designer",
            "description" => "Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum."
        ]
    ];
    $html = new HTML();
    $chemain = str_ireplace("router.php","",$_SERVER['SCRIPT_NAME']);
    $html->data=$data;
    $html->set_code("w3pro.css", "css", "https://www.w3schools.com/w3css/4/w3pro.css", $chemain."assets/libs/w3pro.css/4.13/w3pro.css");
    $html->set_code("w3.css", "css", "https://www.w3schools.com/w3css/4/w3.css", $chemain."assets/libs/w3.css/4.13/w3.css");
    $html->set_code("w3.js", "js", "https://www.w3schools.com/lib/w3.js", $chemain."assets/libs/w3.js/1.04/w3.js");
    $html->set_code("vue", "js", "https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js", $chemain."assets/libs/vue/2.6.10/vue.js");
    $html->set_code("vuex", "js", "https://cdnjs.cloudflare.com/ajax/libs/vuex/3.2.0/vuex.js", $chemain."assets/libs/vuex/3.2.0/vuex.js");
    $html->set_code("jquery", "js", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js", $chemain."assets/libs/jquery/3.5.0/jquery.js");
    $html->set_code("js.cookie", "js", "https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js", $chemain."assets/libs/js-cookie/2.2.1/js.cookie.js");
    $html->set_code("moment.js", "js", "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js", $chemain."assets/libs/moment.js/2.24.0/moment.js");
    $html->set_code("awesome-4.7.0", "css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", $chemain."assets/libs/font-awesome/4.7.0/css/font-awesome.css");
    $html->set_code("awesome-5.8.1", "css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css", $chemain."assets/libs/font-awesome/5.8.1/css/font-awesome.css");
?>