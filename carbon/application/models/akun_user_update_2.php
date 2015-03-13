<?php
Class akun_user_update_2 extends CI_Model
{
 function resett($username, $email)
 {
   $this -> db -> update('akun_user');
   $this -> db -> set('password',$password1);
   $this -> db -> where('username', $username);
   $this -> db -> where('email', $email);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>
