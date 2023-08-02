<?php 
include_once('app/Database.php');

class User extends Database {
    private $table_name = 'users';
    public $id;
    public $name;
    public $email;
    public $password;
 
    public function register() {

        // check if user is already registered
        $query = " SELECT * FROM " . $this->table_name . " WHERE email = :email ";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        if($stmt->rowCount() > 0)  {
            return false;
        }

        // register new user
        $query = "INSERT INTO " . $this->table_name . " (name, email, password) VALUES (:name, :email, :password)";

        $stmt = $this->conn->prepare($query);
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
     }


    public function login() {
        $query = " SELECT * FROM " . $this->table_name . " WHERE email = :email ";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        // fetch a record from the database
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row && password_verify($this->password, $row['password'])) {
            
            $this->id = $row['id']; 
            $this->name = $row['name'];

            return true;
        } else {
            return false;
        }
     }

}