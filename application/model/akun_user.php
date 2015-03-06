<?php
Class akun_user extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('nia, username, password');
   $this -> db -> from('akun_user');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
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
