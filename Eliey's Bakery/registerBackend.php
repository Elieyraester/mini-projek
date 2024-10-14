
<?php
include("config.php");

if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $birthday = $_POST['birthday'];
        $gender =$_POST['gender'];

        $sql = mysqli_query($connect, "INSERT INTO customer (password , username, email, mobile , birthday , gender) VALUES ('$password','$username','$email','$mobile','$birthday','$gender')");
        header('Location: bakery.html');
}

?>
