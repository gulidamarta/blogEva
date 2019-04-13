<?php
session_start();
$db = mysqli_connect("localhost", "marta", "M1967gAaRLi1969", "authentication");
if(isset($_POST['register_btn'])){
    session_start();
    $username = mysql_real_escape_string($_POST[$_POST['username']]);
    $email = mysql_real_escape_string($_POST[$_POST['email']]);
    $password = mysql_real_escape_string($_POST[$_POST['password']]);

    if ($password){
        $password = md5($password);
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location: index.php");
    }
}
?>


<?php
use PDO;
$connection = mysqli_connect('localhost', 'marta', 'M1967gAaRLi1969');
$select_db = mysqli_select_db($connection, 'authentication');
if (isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(username, password, email) VALUES (`$username`, `$password`, `$email`)";
    $result = mysqli_query($connection, $query);

    if ($result){
        $smsg = "Регистрация прошла успешно";
    }
    else{
        $flmsg = "Ошибка";
    }
}
 ?>

<?php
$servername = "localhost";
$username = "marta";
$password = "M1967gAaRLi1969";
$dbname = "authentication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (usename, email, password)
        VALUES ('marta', 'marta.gulida@mail.ru', '12345')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

