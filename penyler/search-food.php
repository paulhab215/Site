 <?php 
  include "pages/Restaurants/foodRepository.php";

  $food = new foodRepository();

  $result = $food->getAll();
  // error_log(print_r($result,true), 3, "errors.txt");

  function parseToXML($htmlStr)
  {
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
  }

  header("Content-type: text/xml");

  // Start XML file, echo parent node
  echo '<markers>';

  // Iterate through the rows printing XML nodes for each
  foreach ($result as $obj) {
    $state = $obj->state_abbrv;
    $addy = parseToXML($obj->street)." ".parseToXML($obj->city)." ".parseToXML($state)." ".parseToXML($obj->zip);

    // Add to XML document node
    echo '<marker ';
    echo 'name="' . parseToXML($obj->name) . '" ';
    echo 'address="'.$addy.'" ';
    echo 'bio="' . parseToXML($obj->bio) . '" ';
    echo 'yelp="' . parseToXML($obj->yelp_link) . '" ';
    echo 'foodpic="' . parseToXML($obj->food_id) . '" ';
    echo '/>';
  }

  // End XML file
  echo '</markers>'
?>