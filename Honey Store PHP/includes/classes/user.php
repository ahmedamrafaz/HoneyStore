<?php
// user.php
class User{
    protected $db;
    protected $user_name;
    protected $user_email;
    protected $user_pass;
    protected $hash_pass;
    
    function __construct($db_connection){
        $this->db = $db_connection;
    }
    // SING UP USER
    function singUpUser($username, $email, $city, $age, $phone, $password ){
       
        try{
            $this->user_name = trim($username);
            $this->user_email = trim($email);
            $this->user_city = trim($city);
            $this->user_age = trim($age);
            $this->user_phone = trim($phone);
            $this->user_pass = trim($password);
            if(!empty($this->user_name) && !empty($this->user_email) && !empty($this->user_city) && !empty($this->user_age) && !empty($this->user_phone) && !empty($this->user_pass)){

                if (filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) { 
                    $check_email = $this->db->prepare("SELECT * FROM `customers` WHERE Email = ?");
                    $check_email->execute([$this->user_email]);

                    if($check_email->rowCount() > 0){
                        return ['errorMessage' => 'This Email Address is already registered. Please Try another.'];
                    }
                    else{
                        $user_type='user';
                        $this->hash_pass = password_hash($this->user_pass, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO `customers` (City,ContactNumber,Age,Email,pass,C_name,user_type) VALUES(:user_city, :user_phone, :user_age,:user_email,:user_pass,:username,'$user_type')";
                        $sign_up_stmt = $this->db->prepare($sql);
                        //BIND VALUES
                        $sign_up_stmt->bindValue(':username',htmlspecialchars($this->user_name), PDO::PARAM_STR);
                        $sign_up_stmt->bindValue(':user_email',$this->user_email, PDO::PARAM_STR);
                        $sign_up_stmt->bindValue(':user_pass',$this->hash_pass, PDO::PARAM_STR);
                        $sign_up_stmt->bindValue(':user_city',$this->user_city, PDO::PARAM_STR);
                        $sign_up_stmt->bindValue(':user_phone',$this->user_phone, PDO::PARAM_STR);
                        $sign_up_stmt->bindValue(':user_age',$this->user_age, PDO::PARAM_STR);
                        $sign_up_stmt->execute();
                        return ['successMessage' => 'You have signed up successfully.'];    
                        }             
                }
                else{
                    return ['errorMessage' => 'Invalid email address!'];
                }    
            }
            else{
                return ['errorMessage' => 'Please fill in all the required fields.'];
            } 
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // LOGIN USER
    function loginUser($email, $password){
        
        try{
            $this->user_email = trim($email);
            $this->user_pass = trim($password);

            $find_email = $this->db->prepare("SELECT * FROM `customers` WHERE Email = ?");
            $find_email->execute([$this->user_email]);
            
            if($find_email->rowCount() === 1){
                $row = $find_email->fetch(PDO::FETCH_ASSOC);

                $match_pass = password_verify($this->user_pass, $row['pass']);
                if($match_pass){
                    $_SESSION = [
                        'user_id' => $row['CustomersID'],
                        'email' => $row['Email']
                    ];
                    header('Location: home.php');
                }
                else{
                    return ['errorMessage' => 'Invalid password'];
                }
                
            }
            else{
                return ['errorMessage' => 'Invalid email address!'];
            }

        }
        catch (PDOException $e) {
            die($e->getMessage());
        }

    }
    


    // FIND USER BY ID
    function find_user_by_id($id){
        try{
            $find_user = $this->db->prepare("SELECT * FROM `customers` WHERE CustomersID = ?");
            $find_user->execute([$id]);
            if($find_user->rowCount() === 1){
                return $find_user->fetch(PDO::FETCH_OBJ);
            }
            else{
                return false;
            }
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }
		   
	

    
    // FETCH ALL USERS WHERE ID IS NOT EQUAL TO MY ID
    function all_users($id){
        try{
            $get_users = $this->db->prepare("SELECT id,username FROM `customers` WHERE CustomersID != ?");
            $get_users->execute([$id]);
            if($get_users->rowCount() > 0){
                return $get_users->fetchAll(PDO::FETCH_OBJ);
            }
            else{
                return false;
            }
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
?>