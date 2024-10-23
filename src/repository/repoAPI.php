<?php

    require_once("../src/model/user.php");
    require_once("../src/model/password.php");
    require_once("../src/model/user_role.php");

    class Repository
    {
        private $dbconnect;

        public function __construct($dbconnect)
        {
            $this->dbconnect = $dbconnect;
        }

        public function getUser($useremail)
        {
            $statement = $this->dbconnect->getConection()->prepare(
                "SELECT * FROM AT_employee where email = :email"
            );

            $statement->bindParam(':email', $useremail);

            $statement->execute();
                                
            $user = null;

            if($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $user = new User();
                $user->matricule = $row['matricule'];
                $user->email =$row['email'];
                $user->noms =$row['noms'];
                $user->prenoms =$row['prenoms'];

            }
            
            return $user;

        }

        public function checkPassword($userid,$password){

            $statement = $this->dbconnect->getConection()->prepare(
                "SELECT * FROM AT_user_password where employee = :email and hash = :passwordhash AND (status = 'ACTIF' OR status = 'INITIALIZE')"
            );

            $passwordhash = md5($password);
            $statement->bindParam(':email', $userid);
            $statement->bindParam(':passwordhash', $passwordhash);

            $statement->execute();
                          

            if($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $password = new Password();
                $password->password_id = $row['password_id'];
                $password->create_date = $row['create_date'];
                $password->hash = $row['hash'];
                $password->status = $row['status'];
                $password->employee = $row['employee'];

                return $password;
            }
            
            return false;
        }

        public function checkDoublePassword($userid,$password){

            $statement = $this->dbconnect->getConection()->prepare(
                "SELECT * FROM AT_user_password where employee = :email and hash = :passwordhash"
            );

            $passwordhash = md5($password);
            $statement->bindParam(':email', $userid);
            $statement->bindParam(':passwordhash', $passwordhash);

            $statement->execute();
                          

            if($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $password = new Password();
                $password->password_id = $row['password_id'];
                $password->create_date = $row['create_date'];
                $password->hash = $row['hash'];
                $password->status = $row['status'];
                $password->employee = $row['employee'];

                return $password;
            }
            
            return null;
        }

        public function changePassword($userid,$password)
        {
            $statement = $this->dbconnect->getConection()->prepare(
                "UPDATE AT_user_password SET status = 'INACTIF' WHERE employee = :employee"
            );

            $statement->bindParam(':employee', $userid);

            $statement->execute();



            $statement = $this->dbconnect->getConection()->prepare(
                "INSERT INTO AT_user_password(create_date,hash,status,employee) value(:create_date,:passwordhash,'ACTIF',:employee)"
            );

            $passwordhash = md5($password);
            $create_date = date("Y-m-d");

            $statement->bindParam(':employee', $userid);
            $statement->bindParam(':passwordhash', $passwordhash);
            $statement->bindParam(':create_date', $create_date);

            $statement->execute();
        }

        public function getUserRoles($userid)
        {
            try{

                $statement = $this->dbconnect->getConection()->prepare(
                    "SELECT * FROM AT_user_role WHERE employee = :employee"
                );

                $statement->bindParam(':employee', $userid);

                $statement->execute();

                $roles = [];

                while($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                    $password = new User_role();
                    $password->user = $row['employee'];
                    $password->role = $row['role_id_AT_role'];

                    $roles[] = $password;
                }

                return $roles;
            }catch(Exception $e){ print $GLOBALS['error'] = $e->getMessage(); }
        }

    }