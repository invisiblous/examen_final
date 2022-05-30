<?php

class Manage {
    
    protected function db_connect():object {
        $server = 'db.3wa.io';
        $login = 'damienramada';
        $pwd = '57157c602590130d70ee313c12473ff4';
        $base = 'damienramada_museum';
        
        try {
            $db = new PDO('mysql:host='.$server.';port=3306;dbname='.$base.';charset=utf8', $login, $pwd);    
        }
        catch (PDOException $e) {
            echo '<h3>Site en maintenance...</h3>';
            echo $e->getMessage();
            exit;
        }
        return $db;
    }
    
    protected function getQuery(string $query, $data=[]):object{
        $db = $this->db_connect();
        $stmt = $db -> prepare($query);
        $stmt -> execute($data);
        return $stmt;
    }
    
    protected function setQuery(string $query, $data=[]):int{
        $db = $this->db_connect();
        $stmt = $db -> prepare($query);
        $stmt -> execute($data);
        $id = $db->lastInsertId();
        return $id;
    }
    
    
    
    
    public function manageForm($post) {
        
        switch($post['submit']) {
            case 'Se Connecter':
            break;
            
            case 'S\'inscrire' :
            // traitement du formulaire d'inscription
            if(isset($post['submit'])) {
                if(isset($post['name'])){
                    $post['name'] = htmlspecialchars($post['name']);
                } else {
                    $post['name'] = '';
                }
                if(isset($post['birthdate'])) {
                    $post['birthdate'] = htmlspecialchars($post['birthdate']);
                } else {
                    $post['birthdate'] = '';
                }
                if(isset($post['mail'])) {
                    $post['mail'] = htmlspecialchars($post['mail']);
                } else {
                    $post['mail'] = '';
                }
                if(isset($post['tel'])) {
                    $post['tel'] = htmlspecialchars($post['tel']);
                } else {
                    $post['tel'] = '';
                }
                if(isset($post['pwd'])) {
                    // On crypt le mot de passe 
                    $post['pwd'] = md5($post['pwd']);
                } else {
                    $post['pwd'] = '';
                }
                if(isset($post['address'])) {
                    $post['address'] = htmlspecialchars($post['address']);
                } else {
                    $post['address'] = '';
                }
                if(isset($post['cp'])) {
                    $post['cp'] = htmlspecialchars($post['cp']);
                } else {
                    $post['cp'] = '';
                }
                if(isset($post['city'])) {
                    $post['city'] = htmlspecialchars($post['city']);
                } else {
                    $post['city'] = '';
                }
                
            }
            $this->inscription($post);
            break;
        }
    }
    
    
    
    
    
    
    public function connexion($post):bool {
        $data=[
            'mail'=>$post['mail'],
            'pwd'=>md5($post['pwd'])
            ];
        $query="SELECT id FROM users WHERE mail=:mail AND pwd=:pwd";
        $user = $this->getQuery($query, $data);
        $row = $user->rowCount();
        
        if($row){
            return true;
        } else{
            return false;
        }
    }
    
    public function inscription($post) {
        $data=[
            'name'=>$post['name'],
            'birthdate'=>$post['birthdate'],
            'mail'=>$post['mail'],
            'tel'=>$post['tel'],
            'pwd'=>$post['pwd']
            ];
            
        $query="INSERT INTO users (name, birthdate, mail, tel, pwd) VALUES (:name, :birthdate, :mail, :tel, :pwd)";
        $user_id = $this->setQuery($query, $data);

        $data = [
            'address'=>$post['address'],
            'cp'=>$post['cp'],
            'city'=>$post['city'],
            'user_id'=> $user_id
        ];
        $query="INSERT INTO addresses (address, cp, city, user_id) VALUES (:address, :cp, :city, :user_id)";
        $this->getQuery($query, $data);
    }
    
    public function userTemplate(string $extends_id=''):array {
        $connexion = '
            <div class="connexion" id="bloc_connexion">
                <form action="" method="post" id="connexion'.$extends_id.'">
                    <input type="text" name="mail" placeholder="mail"/>
                    <input type="password" name="pwd" placeholder="mdp"/>
                    <input class="button" type="submit" name="submit" value="Se Connecter"/>
                </form>
            </div>';
        
        $signup = '
            <div class="inscription" id="inscription">
                <form method="post">
                    <input type="text" name="name" placeholder="name"/>
                    <input type="date" name="birthdate"/>
                    <input type="text" name="mail" placeholder="mail"/>
                    <input type="tel" name="tel" placeholder="tel"/>
                    <input type="password" name="pwd" placeholder="password"/>
                    <input type="text" name="address" placeholder="adresse"/>
                    <input type="number" name="cp" placeholder="Code Postal"/>
                    <input type="text" name="city" placeholder="ville"/>
                    <input id="register" class="button" type="submit" name="submit" value="S\'inscrire"/>
                </form>
            </div>';
            
        return ['connexion' => $connexion, 'signup' => $signup];
    }
    
}