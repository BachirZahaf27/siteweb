<?php 
class login {

    public $user = []; // Contiendra les information sur l'utilisateur

    public function __construct(){
        session_start(); // Demarrer session
        if(empty($_SESSION['email'])){
            $_SESSION['email'] = "";
        }
        if(empty($_SESSION['password'])){
            $_SESSION['password'] = "";
        }
        $this->connecter($_SESSION['email'], $_SESSION['password']); // verifier si il est conecter
    }
    public function connecter($email, $password){
        $this->user['empty'] = (empty($email)||empty($password)); // Stocker true si c'est vide ou false
        if($this->user['empty']){
            $this->user['conect'] = false; // Stocker non conecter
        }else{
            $DB = new database("localhost", "root", "", "edu.27"); // ouvrire la base de donnais
            $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"; // Sql syntax
            $num = $DB->num_row($sql); // Comter combien y'a de profile avec le meme email et mot de passe /// resulta sera 1 ou 0 ///
            $user = $DB->query($sql); // Appler au info /// resulta sera un Array ///
            $this->user['conect'] = ($num > 0); // Stocker true si c'est connecter ou false
            if($this->user['conect']){ // il y'a se compte
                foreach($user as $key => $value){
                    $this->user[$key] = $value; // Stocker les info de l'utilisateur
                }
            }
        }
    }
    public function register($nom, $prenom, $email, $password){
        $this->user['empty'] = (empty($nom)||empty($prenom)||empty($email)||empty($password)); // Stocker true si c'est vide ou false
        if($this->user['empty']){
            $this->user['conect'] = false; // Stocker non conecter
        }else{
            $DB = new database("localhost", "root", "", "edu.27"); // ouvrire la base de donnais
            $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"; // Sql syntax
            
            $num = $DB->num_row($sql); // Comter combien y'a de profile avec le meme email et mot de passe /// resulta sera 1 ou 0 ///
            $this->user['conect'] = ($num <= 0); // Stocker false si il exist ou true
            if($this->user['conect']){ 
                $sql = "INSERT INTO user (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')"; // Sql syntax
                $this->user['conect'] = $DB->boolien($sql); // Stocker true si c'est connecter ou false
                if($this->user['conect']){ // c'bon c'enregistrer
                    // Stocker les info de l'utilisateur
                    $this->user['nom'] = $nom;
                    $this->user['prenom'] = $prenom;
                    $this->user['email'] = $email;
                    $this->user['password'] = $password;
                }
            }
        }
    }
}
?>