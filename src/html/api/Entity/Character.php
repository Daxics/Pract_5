<?php

use App\Controller\Character;


switch ($method){
    case 'GET':
        if(isset($id)){
            Character::getPostsCharacters($connect, $id);
        } else {
            Character::getCharacters($connect);
        }
        break;
    case 'POST':
        Character::addCharacter($connect, $_GET['name'] ?? '');
        break;
    case 'PATCH':
        if (isset($id)) {
            $data = json_decode(file_get_contents("php://input"), true);
            Character::patchCharacter($connect, $data, $id);
        }
        break;
    case 'DELETE':
        Character::delCharacter($connect, $id);
        break;

}