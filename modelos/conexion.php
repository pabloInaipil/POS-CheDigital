<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=chedigit_pos",
						"chedigit_master",
						 "che_maru_12a3A");

		$link -> exec("set names utf8");

		return $link;


	}
}