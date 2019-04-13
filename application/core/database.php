<?php

class DataBase {
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function post_data_db($connection){
        if (isset($_POST['username']) && isset($_POST['password'])){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($connection, $query);
        }
    }

    public function send_data()
    {
        $connection = mysqli_connect('localhost', 'marta', 'M1967gAaRLi1969');
        mysqli_select_db($connection, 'authentication');
        $this->post_data_db($connection);
    }

    public function get_data(){

        $connection = mysqli_connect('localhost', 'marta', 'M1967gAaRLi1969');
        $select_db = mysqli_select_db($connection, 'authentication');
        // creat new session or restart previous one
        //session_start();
        // when using session data is saving on the temp files on the server
        if (isset($_POST['username']) and isset($_POST['password'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            // * означает, что мы будем использовать всё
            $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            //mysqli_fetch_all();

            $count = mysqli_num_rows($result);
            if ($count == 1){
                $_SESSION['username'] = $username;
            }else{
                $flmsg = "Error occupied.";
            }
        }

        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            echo "Hello, ".$username."!";
            echo "You have entered.";
            $_SESSION['username'] = $username;
            // $this->view->generate('Registration_view.phtml');
             echo "<a href='Logout'>Logout</a>";
        }
        else{
            echo "You haven't entered.";
        }
    }


    public function logout(){
        session_start();
        // destroy will delete all data connected with current session
        session_destroy();
        // через : файл на который нам нужно перейти
        header('Location: index.php');
        exit;
    }

}