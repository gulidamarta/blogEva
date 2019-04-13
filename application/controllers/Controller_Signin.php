<?php

class Controller_Signin extends Controller
{
    function action_index()
    {
        /*
        $file = file_get_contents('Signin_view.php');
        $file = str_replace('{LOG}', 'Login/Logout', $file);
        print $file;
        */
        $this->view->generate('Signin_view.php');
        $this->database->get_data();
        /*
        $urername = $_SESSION['username'];
        $file = str_replace('{LOG}', $urername, $file);
        print $file;
        */
    }

}