<?php
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

function register_errors($dbc, $name = '', $email = '', $comment = '') {

  $errors = array(); // Initialize error array.

  // Check for a first name:
  if (empty($name)) {
    $errors[] = 'You must input your name.';
  } else {
    $un = mysqli_real_escape_string($dbc, trim($username));
  }
  
  // Check for a email:
  if (empty($email)) {
    $errors[] = 'You must input your email.';
  } else {
    $fn = mysqli_real_escape_string($dbc, trim($firstname));
  }
  

  // Check for a comment:
  if (empty($comment)) {
    $errors[] = 'You must input a comment.';
  } else {
    $pv = mysqli_real_escape_string($dbc, trim($provkey));
  }   


  if (empty($errors)) { // If everything's OK.

    $q = 'INSERT INTO messages (name, email, website, comment) VALUES ($name, $email, $website, $comment, NOW())';
    $r = @mysqli_query ($dbc, $q); // Run the query.
    
    // Check the result:
    if (mysqli_num_rows($r) == 1) {

      // Fetch the record:
      $row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
  
      // Return true and the record:
      return array(true, $row);
      
    } else { // Not a match!
      $errors[] = 'I don\'t have any users with that username/password combination';
    }
    
  } // End of empty($errors) IF.
  
  // Return false and the errors:
  return array(false, $errors);

}