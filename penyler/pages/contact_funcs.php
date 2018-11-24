<?php

require ('../mysqli_connect.php');

function redirect_user ($page = 'index.php') {

  // Start defining the URL...
  // URL is http:// plus the host name plus the current directory:
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  
  // Remove any trailing slashes:
  $url = rtrim($url, '/\\');
  
  // Add the page:
  $url .= '/' . $page;
  
  // Redirect the user:
  header("Location: $url");
  exit(); // Quit the script.

}

function register_errors($dbc, $name = '', $email = '', $comment = '', $website = "") {

  $query = "INSERT INTO contact (name, email, website, comment) VALUES ('$name', '$email', '$website', '$comment')";

  $result = mysqli_query($connection, $query);
  if (!$result) {
    error_log("Did not pull contacts data", 3, "../errors.txt");
  }else{
    redirect_user('contact_success.php');
  }
  
  // mysqli_close($connection); // Close the database connection.
}