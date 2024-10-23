<?php

    require_once('../src/repository/repoAPI.php');

    class APIController{
        
        private $dbconnect;

        public function __construct()
        {
            $this->dbconnect = new DbConnect();
        }

        function check_user($useremail,$password)
        {
            $repo = new Repository($this->dbconnect);
            $user = $repo->getUser($useremail);

            if(empty($user))
            {
                print "ERR-001";
            }
            else
            {
                $password = $repo->checkPassword($user->matricule,$password);
                
                if( !empty($password) )
                {
                    if( $password->status == "INITIALIZE")
                        print "ERR-003";
                    else
                        print json_encode($user);

                }
                else
                {
                    print "ERR-002";
                }
            }

            return $user;
        }

        function change_password()
        {
            $user_email = $_REQUEST['user_email'];
            $password = $_REQUEST['password'];

            $repo = new Repository($this->dbconnect);

            $user = $repo->getUser($user_email);
            $user_id = $user->matricule;

            $holdpass = $repo->checkDoublePassword($user_id,$password);

            if(  !empty($holdpass) )
            {
                $error = "ERR-DOUBLE-PASS";
                print($error);
            }
            else
            {
                $repo->changePassword($user_id,$password);
                print("Password change");
            }

        }
        
        function setUserRoles($roles)
        {
            foreach ($roles as $role) {
                $_SESSION[ $role->role ] = 1;
            } 
        }

        function ldapConnect_($userid,$password)
        {		
            try{
                // Connexion au serveur
                $server = "ldap://10.250.90.8"; //"camlight.cm"; //"10.250.90.207";
                $port = '389';
                $connexion_serveur = ldap_connect($server, $port);
        
                // Information de connexion
                $UserId = $userid;
                $pwd = $password;
                            
                if($connexion_serveur)
                {
                    ldap_set_option($connexion_serveur, LDAP_OPT_PROTOCOL_VERSION, 3);
                    ldap_set_option($connexion_serveur, LDAP_OPT_REFERRALS, 0);
        
                    $userDn = trim($UserId)."@camlight.cm";
                    $userPw = $pwd;
        
                    $result = @ldap_bind($connexion_serveur,$userDn,$userPw);
        
                    // Connexion identifiée au serveur			               
                    if(!$result)
                    {
                        ldap_close($connexion_serveur);
                        $output = ['result'=> 'connectError','content'=>'Nom utilisateur ou mot de passe incorrect'];
                    }
                    else
                    {
                        //Récupération des informations personnel de l'utilisateur
                        //Definition du compte AD à chercher
                        $samaccount = $UserId;
                        $dn = "OU=Guests,OU=Cameroon,Dc=camlight,DC=cm";  //nom du domaine de recherche
                        $filter = "(&(objectCategory=person)(objectclass=user)(sAMAccountName=$samaccount))";
                        $attr = array("mail","givenname","sn"); //attributs à récuperer
        
                        $results = ldap_search($connexion_serveur, $dn, $filter, $attr);				
                        $display = ldap_get_entries($connexion_serveur, $results);
                        
                        if($display["count"] == 0) 
                        { 
                            $dn = "OU=Eneo People,OU=People,OU=Cameroon,Dc=camlight,DC=cm";  //nom du domaine de recherche
                            $results = ldap_search($connexion_serveur, $dn, $filter, $attr);
                        
                            $display = ldap_get_entries($connexion_serveur, $results);
                            
                            if($display["count"] == 0) 
                            {
                                $output = ['result'=> 'connectError','content'=>'Compte invalide'];
                            }
                            else
                            {
                                $output = ['result'=> 'connect','content'=>$display];
                            }
                        }
                        else
                        {
                            $output = ['result'=> 'connect','content'=> $display];
                        }
                        
                    }
        
                } 
                else 
                {			
                    $output = ['result'=> 'error','content'=>'Erreur de connexion au serveur'];
                }
        
                return $output;
            }
            catch(Exception $e)
            {
            
            }
        }
        
    }
