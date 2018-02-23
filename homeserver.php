<?php
session_start();
//variable declaration
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";
$password1 = "";
$password_1 = "";
$password_2 = "";
$firstName = "";
$lastName = "";
$position = "";
$uname = "";
$psw = "";
//connect to database
$db = mysqli_connect('localhost','root','saurabh','registration');


if(isset($_POST['signup']))
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
// form validation: ensure that the form is correctly filled
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($firstName)) { array_push($errors, "First Name is required"); }
  if (empty($lastName)) { array_push($errors, "Last Name is required"); }
  if (empty($position)) { array_push($errors, "Position is required"); }
  if ($password_1 != $password_2)
  {
     array_push($errors, "The two passwords do not match");
  }
  // register user if there are no errors in the form
    if (count($errors) == 0)
    {
      $password = md5($password_1);//encrypt the password before saving in the database
    	//$query = "INSERT INTO users (username, email, password)
  //  			  VALUES('$username', '$email', '$password')";
      $query = "INSERT INTO users(firstName, lastName, position, username, email, password)
            VALUES ('$firstName','$lastName','$position','$username', '$email', '$password_1')";
    	mysqli_query($db, $query);
    	$_SESSION['username'] = $username;
    	$_SESSION['success'] = "You are now logged in";
    	//header('location: index.php');
    }
  }

  if(isset($_POST['login1']))
  {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    if (empty($username))
    {
  	   array_push($errors, "Username is required");
    }
    if (empty($password1))
    {
    	array_push($errors, "Password is required");
    }
    if (count($errors) == 0)
    {
  	//$password1= md5($password1);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password1' ";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1)
    {
      echo 'successfully logged in!!';
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	 // header('location: welcome.html');
      header("Location: welcome.html");
  	}
    else
    {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  }
?>
