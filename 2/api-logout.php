<?php 
    require_once "./src/db.php";
    require_once "./src/utils.php";

    if(empty($_POST['token'])){
        generate_json_response(false, "Данные не предоставлены");
    }

    $stmt = query("DELETE FROM `user_token` WHERE `user_token`.`token` = :token", ['token' => $_POST['token']]);
    generate_json_response(true, "Пользователь успешно разлогинился");


?>