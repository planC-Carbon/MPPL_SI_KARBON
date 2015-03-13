<?php
Class akun_user_update extends CI_Model
{
 function reset($username, $email)
 {
   $this -> db -> select('nia, username, email');
   $this -> db -> from('akun_user');
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
