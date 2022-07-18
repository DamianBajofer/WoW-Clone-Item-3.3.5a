<?php
declare(strict_types = 1);
header("Access-Control-Allow-Origin: *");
class Config{
	
	// Credenciales de MySQL
	private static $MySQLData = array(
		"Host" => 		"",
		"Port" => 		"3306",
		"User" => 		"",
		"Pass" => 		"",
		"Database" => 	"world"
	);

	public static function GetData(string $data) : string{
		return self::$MySQLData[$data];
	}
}
?>