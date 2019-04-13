<?php

class Controller_Logout extends Controller{
    function action_index(){
       // $this->view->generate('Signin_view.php');
        $this->database->logout();
    }
}