<?php 
//path de la API
$api = 'https://ghibliapi.herokuapp.com/';

function allfilms() {
	//traigo los resultados del endpoint films
	$peliculas = file_get_contents('https://ghibliapi.herokuapp.com/films/', true);
	//proceso el json y lo paso a objeto
	$data = json_decode($peliculas);
	return $data;
}

function getfilm($id) {
	$film = file_get_contents('https://ghibliapi.herokuapp.com/films/'.$id, true);
	$data = json_decode($film);
	return $data;
}

?>