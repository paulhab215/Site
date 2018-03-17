 <?php
 error_log("1!", 3, "../errors.txt");
 echo ''
  require ('../mysqli_connect.php');

  function parseToXML($htmlStr)
  {
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
  }

  // Opens a connection to a MySQL server
  $connection=mysql_connect ('localhost', 'root', 'Pandaria02.');
  if (!$connection) {
    die('Not connected : ' . mysql_error());
  }

  // Set the active MySQL database
  $db_selected = mysql_select_db('paulsite', $connection);
  if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
  }

  // Select all the rows in the markers table
  $query = "SELECT * FROM food";
  $result = mysql_query($query);
  if (!$result) {
    die('Invalid query: ' . mysql_error());
  }

  header("Content-type: text/xml");

  // Start XML file, echo parent node

    echo 'var clients = [';

  // Iterate through the rows, printing XML nodes for each
  while ($row = @mysql_fetch_assoc($result)){
    $state = $row['state'];
    $state = substr($state, strpos($state, "*") + 1);
    $addy = parseToXML($row['street'])." ".parseToXML($row['city'])." ".parseToXML($state)." ".parseToXML($row['zip']);
    // Add to XML document node

    echo '{ "Name": "'.parseToXML($row['name']).'", "Type": 1, "Address": "'.$addy.'", "Ranking": "'.parseToXML($row['rank']).'" },';
  }
  echo  '];';

 // End XML file
?>
