<?php

require_once __DIR__ . '/app/CharacterApi.php';
require_once __DIR__ . '/app/CharacterController.php';

// BACKEND_URL debe terminar en /api
$backendUrl = rtrim(getenv("API_URL") ?: "https://examen-despliegue-ieva-antoniorb1913-2.onrender.com/api", "/");

// La API de personajes vive en /api/characters
$apiBaseUrl = $backendUrl . "/characters";

$api = new CharacterApi($apiBaseUrl);
$controller = new CharacterController($api);
$controller->listCharactersGrid();
