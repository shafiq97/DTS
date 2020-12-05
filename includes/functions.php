<?php
class Login{
  public function LoginSystem(){
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
      if (empty($_POST['login']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
      }
      else{
        include 'connect.php';
        // Define $username and $password
        $username = $_POST['login'];
        $password = md5($_POST['password']);
        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT login, password FROM users WHERE login=? AND password=? LIMIT 1";
        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if($stmt->fetch()) { //fetching the contents of the row 
          $_SESSION['login'] = $username; // Initializing Session
      }
      mysqli_close($conn); // Closing Connection
    }
  }
}
  public function SessionVerify(){
    if(isset($_SESSION['login'])){
    header("location: includes/checkuser.php"); // Check user session and role
    }
  }
  public function SessionCheck(){
    global $conn;
    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT * FROM users WHERE login = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $_SESSION["id"] = $row["id"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["role"] = $row["role"];
  }
  public function UserType(){
    //if user role is 1, redirect to admin page
    if ($_SESSION["role"] == 1) {
      header("Location:../user/admin/");
    }
    //if user role is 0, redirect to user page
    if ($_SESSION["role"] == 0) {
      header("Location:../user/simpleuser/");
    }
  }
}
class UserFunctions{
  public function UserName(){
    $username = $_SESSION["name"];
    echo $username;
  }
}
?>
