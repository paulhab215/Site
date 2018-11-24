<?php
// error_log("update ".$data['name'], 3, "../../errors.txt");
include "food.php";

class foodRepository {

    protected $connection;

    public function __construct() {}

    // establish a database connection if one doesnt exist
    private function db() {
        if ($this->connection === NULL){ 
            $this->connection = mysqli_connect("localhost", "root", "secret", "paulsite");
        }      

        return $this->connection;
    }

    private function read($row) {
        $result = new food();
        $result->food_id = $row['food_id'];
        $result->name = $row['name'];
        $result->street = $row['street'];
        $result->secondary_street = $row['secondary_street'];
        $result->city = $row['city'];
        $result->zip = $row['zip'];
        $result->bio = $row['bio'];
        $result->yelp_link = $row['yelp_link'];
        $result->type = $row['type'];
        $result->rank = $row['rank'];
        return $result;
    }

    public function getById($food_id) {
        $conn = $this->db();
        $sql = "SELECT * FROM food WHERE food_id = '".$food_id."'";
        $result = mysqli_query($conn, $sql);
        $final = array();
        while ($row = @mysqli_fetch_assoc($result)){
            array_push($final, $this->read($row));
        }
        return $final;
    }

    public function getAll() {
        $conn = $this->db();
        $sql = "SELECT * FROM food";
        $result = mysqli_query($conn, $sql);
        $final = array();
        while ($row = @mysqli_fetch_assoc($result)){
            array_push($final, $this->read($row));
        }
        return $final;
    }    

    public function insert($data) {
        $conn = $this->db();        
        $sql = "INSERT INTO food (name, street, secondary_street, city, zip) VALUES ('".$data['name']."', '".$data['street']."', '".$data['secondary_street']."', '".$data['city']."', '".$data['zip']."')";
        $result = mysqli_query($conn, $sql);

        return $this->getById(mysqli_insert_id($conn));
    }

    public function update($data) {
        $conn = $this->db();
        $sql = "UPDATE food SET name = '".$data['name']."', street = '".$data['street']."', secondary_street = '".$data['secondary_street']."', city = '".$data['city']."', zip = '".$data['zip']."' WHERE food_id = '".$data['food_id']."'";
        $result = mysqli_query($conn, $sql);
    }

    public function remove($food_id) {
        $conn = $this->db();
        $sql = "DELETE FROM food WHERE food_id = ".$food_id."";
        $result = mysqli_query($conn, $sql);
    }
}

?>