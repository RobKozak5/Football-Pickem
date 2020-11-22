<?php
class User {
   private $db;

   public function __construct($DB_con) {
   $this->db = $DB_con;
   }
   
   // Sign in
      public function login($uname, $uPass) {

         // NEED TO ADD IN ENCRYPTION

         //require './Vendor/autoload.php';
         // load .env secret keys
         // $dotenv = Dotenv\Dotenv::createImmutable('../5thStreetNapa-Admin');
         // $dotenv->load();
         // Find the user in the DB
         $stmt = $this->db->prepare("SELECT * FROM fp_users WHERE  email=?");
         $stmt->bindParam(1, $uname);
         $stmt->execute();
         $data = $stmt->fetch();
         if(empty($data)){
            $message = 'User Not Found';
         }
         else{
            $_SESSION['user_session'] = $user;
            return true;

         // ENABLE COMMENTED OUT CODE WHEN SETTING UP ENCRYPTION

         // Password verification
         // $pepper = $_ENV['APP_ENV_PEPPER'];
         // $uPass_peppered = hash_hmac("SHA3-512", $uPass, $pepper);
         // $user = $data['email'];
         // $hashpass = $data['password'];
         // $verify = password_verify($uPass_peppered, $hashpass);
         // if($verify){
         //    $_SESSION['user_session'] = $user;
         //    return true;
         // }
         // else {
         //    return false;
         //    }
         }
   }
   // /Sign in
 
   public function is_loggedIn() {
      if(isset($_SESSION['user_session'])) {
         return true;
      }
   }
 
   public function redirect($url) {
       header("Location: $url");
   }
 
   public function logout() {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }

   // Checking to see if username already exists
   // public function byUserName($uname) {
   //    $stmt = $db->prepare("SELECT * FROM fsn_users WHERE email=?");
   //    $stmt->bindParam(1, $uName);
   //    $stmt->execute();
   //    $data = $stmt->fetch();
   //    // return values     
   //    return $data;
   //  }
}
?>