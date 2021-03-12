<?php 
class database {

    private $conn; // Contiendra les information sur l'utilisateur
    // private $result; // Contiendra sql result

    public function __construct($host="localhost", $user = "root", $password="", $DB="edu.27"){
        // Create connection
        $this->conn = new mysqli($host, $user/*"zgyerzsl"*/, $password, $DB/*"zgyerzsl_edu"*/);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connexion DB échouée.");
        }
    }
    
    public function query($sql){ // pour select
        $result = $this->conn->query($sql);
        $rows = [];
        while($row = $result->fetch_assoc()) {
            $rows[]=$row;
        }
        return $rows;
    }
    public function num_row($sql){ // pour select
        $result = $this->conn->query($sql);
        $num = $result->num_rows;
        return $num;
    }
    public function boolien($sql){ // c'est just pour insert, delete & update
        $result = ($this->conn->query($sql) === TRUE);
        return $result;
    }
}
?>