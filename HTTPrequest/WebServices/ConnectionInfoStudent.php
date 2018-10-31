<?php

class ConnectionInfo
{
	public function GetConnection()
	{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StudentDB";

        $conn = new mysqli($servername, $username, $password, $dbname);

		return $conn;
	}
}
?>