<?php
function userCheck()
{
    return (isset($_SESSION['login']) && $_SESSION['login']=true && isset($_SESSION['username']) && isset($_SESSION['password']));
}

if(!userCheck())
    {
		header("Location: ../login.php");
		exit();
	}

?>