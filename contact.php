<?php
require_once 'database.php';

class contact {
    static function select() {
        global $conn;
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($id, $name, $phone_number) {
        global $conn;
        $sql = "INSERT INTO contact(id, name, phone_number) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($id, $name, $phone_number);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function update() {}
    static function delete($id) {
        global $conn;
        $sql = "DELETE FROM contact WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id); // "i" indicates integer parameter
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}

?>