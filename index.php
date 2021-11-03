<?php
/*
    class & object 
    -   class is a Blueprint that u can create object from
    -   object is a membre in the main Application 
    -   class has properties
    -   variable inside class = [ Property ]
    -   variable outside class  =   [ variable ]
    -   Functon inside class    =   [ Method]
    -   Function outside class  =   [ Function ]


    -[ Class ]  =   Class keyword
    -[ new ]    =   New Object keyword
    -[ Public , Private , Protected]    = Visibility Markers
    -[ -> ]     =   Apple Store
    -[ $this ]  =   Pseudo varibale.
    -[ :: ]     =   scope Resolution Operation [ Paamayim Nekudotayim ] = double colon

    -self vs $this:
        -self:

        -   Refer to current class
        -   Access Static Membres
        -   Not use ($) becouase its Not Represent a variable but present class constraction

        -$this:
        -   Refer to current object 
        -   Access Non static Members
        -   Use ($) Because it Represent a variable
    
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
        public $ram=    "1GB";      //default value
        public $inch=   "4inch";    //default value
        public $space=  "16GB";     //default value
        public $color=  "white";    //default value
        // public $ownerName;

        //constants
        // const OWNERNAME=3;

        //Methods
        // public function setOwnerName(){
        //     if(strlen($this->ownerName)<self::OWNERNAME)
        //     echo "Owner Name cant be less tha, ".self::OWNERNAME." chars";
        // }
        // public function doubleHomePressed(){
        //     echo "this iphone ram is ".$this -> ram;
        // }

        public function changeSpace($ram,$inch,$space,$color){
            $this->ram      =   $ram;
            $this->inch     =   $inch;
            $this->space    =   $space;
            $this->color    =   $color;
        }
        public function sayHello($n){
            echo "<span style='color:red'>Welcom ".$n."</span>";
        }
    }

    class Sony extends AppleDevice {
        public $camera ="6MP";
    }

    $iphone6plus    =   new AppleDevice();
    $iphone6plus->changeSpace("3,5GB","6.5 inch","32GB","Gold");
    $iphone6plus->sayHello("iPhone 6 plus");
    // $iphone6plus-> ram  = '2GB';
    // $iphone6plus-> inch  = '5 inch'; 
    // $iphone6plus-> space  = '32GB';
    // $iphone6plus-> color  = 'Gold';
    // $iphone6plus-> ownerName  = 'ali';
    // $iphone6plus->doubleHomePressed();
    // $iphone6plus->setOwnerName();
    /*  
        echo AppleDevice::OWNERNAME;
        echo $iphone6plus::OWNERNAME;
    */
    echo    "<pre>";
    echo    var_dump($iphone6plus);
    echo    "</pre>";

    // $iphone7plus    =   new AppleDevice();
    // $iphone7plus-> ram  = '4GB';
    // $iphone7plus-> inch  = '5.5 inch'; 
    // $iphone7plus-> space  = '265GB';
    // $iphone7plus-> color  = 'Black';
    // $iphone7plus->doubleHomePressed();
    // echo    "<pre>";
    // echo    var_dump($iphone7plus);
    // echo    "</pre>";

    // $iphone     =   new AppleDevice();
    // $iphone -> doubleHomePressed();
    // echo    "<pre>";
    // echo    var_dump($iphone);
    // echo    "</pre>";

    $sony   =   new Sony();
    $sony->sayHello("Sony");
    $sony->changeSpace("16GB","6.7 inch","265GB","Black");
    echo    "<pre>";
    echo    var_dump($sony);
    echo    "</pre>";
?>