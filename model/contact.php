<?php
require_once 'database.php';

class contact {
    static function select($id='') {
        global $conn;
        $sql = "SELECT * FROM contacts";
        if ($id!='') {
            $sql .= " WHERE id = $id";
        }
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        $conn->close();
        return $rows;
    }
    static function insert($data=[]) {
        extract($data);
        global $conn;
        $sql = "INSERT INTO contacts SET phone_number = ?, owner = ?, inserted_at = ?, user_fk = ?, city_fk = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($id, $name, $phone_number,);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function update() {}
    static function delete($id='') {
        global $conn;
        $result = '';
        $deleted_at = date('Y-m-d H:i:s', strtotime('now'));
        if ($id == '') {
            $sql = "UPDATE contacts SET deleted_at = '$deleted_at'";
            $result = $conn->query($sql);
        }
        else {
            $sql = "UPDATE contacts SET deleted_at = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('si', $deleted_at, $id);
            $stmt->execute();
            $result = $stmt->affected_rows > 0 ? true : false;
        }
        return $result;
    }
}

?>