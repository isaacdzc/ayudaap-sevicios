<?php 
 namespace Ayudapp\Controllers;

 class UsuariosController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM usuario"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All contact"
 			], 200
 		);
 	}

 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM usuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All contact"
 			], 200
 		);
 	}
 }

