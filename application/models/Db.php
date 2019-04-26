<?php
class Db extends CI_Model {
    public $mysqli;
    public function __construct() {
        parent::__construct();
        $this->mysqli = new mysqli('localhost', 'root', '', 'order_list');
    }

    public function getAll() {
        $sql = "SELECT * FROM `order_list`";
        $result = $this->mysqli->query($sql);
        $list = array();
        while($row = $result->fetch_assoc()) {
            array_push($list, $row);
        }
        return $list;
    }

    public function insert($data) {
        $sql = "INSERT INTO `order_list` (`product`, `price`, `quantity`) VALUES ('".$data['product']."', '".$data['price']."', '".$data['quantity']."')";
        return $this->mysqli->query($sql);
    }
}
?>