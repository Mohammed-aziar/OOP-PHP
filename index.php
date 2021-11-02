<?php
/*
    class & object 
    -   class is a Blueprint that u can create object from
    -   object is a membre in the main Application 
    -   class has properties
    -   variable inside class = [ Property ]
    -   variable outside class  =   [ variable ]

    -[ Class ]  =   Class keyword
    -[ new ]    =   New Object keyword
    -[ -> ]     =   Apple Store

    Apple
    - Class       = Apple Blueprint Design
    - Object      = iPhone That chine Made
    - Application = Apple Store

    Web Application Registration
    - Class       = Code To Add New Membre
    - Object      = The Members
    - Application = Web Application Registration

    Blog System
    - Class       = codeto add new Post , Article , News , Information.
    - Object      = Post , Article , News , Information.
    - Application = Blog System
*/
    class AppleDevice{
        public $ram;
        public $inch;
        public $space;
        public $color;

    }

    $iphone6plus    =   new AppleDevice();
    $iphone6plus-> ram  = '2GB';
    $iphone6plus-> inch  = '5 inch'; 
    $iphone6plus-> space  = '32GB';
    $iphone6plus-> color  = 'Gold';
    echo    "<pre>";
    echo    var_dump($iphone6plus);
    echo    "</pre>";

    $iphone7plus    =   new AppleDevice();
    echo    "<pre>";
    echo    var_dump($iphone7plus);
    echo    "</pre>";
?>