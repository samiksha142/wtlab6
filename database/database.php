<?php

class Registrations {

  public function __construct($conn) {
    $this->conn = $conn;
    $this->table_name = 'registrations';
  }


  public function getRegList() {
    $sql = "SELECT * FROM `{$this->table_name}`;";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $regArr = array();
      while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $regArr[] = $row;
      }
      return $regArr;
    } else {
      return null;
    }
  }

  public function getRegData($id) {
    $sql = "SELECT * FROM `{$this->table_name}` WHERE id=$id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $regData = array();
      while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $regData[] = $row;
      }
      return $regData[0];
    } else {
      return null;
    }
  }

  public function addReg($name, $email, $seats, $reason) {
    $sql = "INSERT INTO {$this->table_name} (name, email, seats, reason) VALUES ('{$name}', '{$email}', '${seats}', '${reason}')";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute();
    return json_encode($stmt);
  }

  public function editReg($name, $email, $seats, $reason, $id) {
    $sql = "UPDATE {$this->table_name} SET name='$name', email='$email', seats='$seats', reason='$reason' WHERE id=$id";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute();
    return json_encode($stmt);
  }

  public function delReg($id) {
    $sql = "DELETE FROM {$this->table_name} WHERE id=$id";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute();
    return json_encode($stmt);
  }  

}