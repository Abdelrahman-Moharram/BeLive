<?php

require 'db_conn.php';


class person  
{
	public $firstname ;
	public $lastname ;
	public $email;
	private $password ;
	public $phonenumber;

	function setpass($pass)
	{
		$this->password = $pass;
	}

	function login($usermail,$userpass)
	{
        
        $connect = mysqli_connect("localhost","root","","sw2");
        if(mysqli_connect_errno())
        {
            die("error happend". mysqli_error());                
        }   
		$query ='select * from user where phonenumber="'.$usermail.'" or email = "'.$usermail.'" and password = "'.$userpass.'"';
        $result = mysqli_query($connect, $query);
        
        if($row = mysqli_fetch_assoc($result))
        {
            $this->email = $row['email'];
            $this->password = $row['password'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            $this->phonenumber = $row['phonenumber'];
            return 1;
        }
        else
        {    
            return 0;
        }
	}
}




class user extends person
{
	public $balance;
    public $offers = array();
}
