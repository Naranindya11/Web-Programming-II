<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class perkenalan extends CI_Controller{

        public function index(){
            echo "<h1 style='color:black; text-align:center'>Introduction</h1>";
            echo "<p> Let me introduce myself <br>
                    My name is Nara Anindya Guna <br>
                    I live in Tegal City <br> 
                    I'm EXO-L Annyeong ";
        }

    }

?>