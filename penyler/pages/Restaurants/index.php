<?php

include "foodRepository.php";

$food = new foodRepository();

switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $food->getAll();
        // error_log(print_r($result,true), 3, "../../errors.txt");
        break;

    case "POST":
        $result = $food->insert(array(
            "name" => $_POST["name"],
            "street" => $_POST["street"],
            "secondary_street" => $_POST["secondary_street"],
            "city" => $_POST["city"],
            "zip" => $_POST["zip"],
        ));
        break;

    case "PUT":
        parse_str(file_get_contents("php://input"), $_PUT);

        $result = $food->update(array(
            "food_id" => $_PUT["food_id"],            
            "name" => $_PUT["name"],
            "street" => $_PUT["street"],
            "secondary_street" => $_PUT["secondary_street"],
            "city" => $_PUT["city"],
            "zip" => $_PUT["zip"],
        ));
        break;

    case "DELETE":
        parse_str(file_get_contents("php://input"), $_DELETE);
        $result = $food->remove(intval($_DELETE["food_id"]));
        break;
}

echo json_encode($result);

?>
