<?php
require_once "./src/db.php";
require_once "./src/utils.php";

if (strlen(trim($_POST['login'])) < 4 || strlen(trim($_POST['password'])) < 4) {
    generate_json_response(false, "Некорректные данные");
}

$stmt = query("SELECT * FROM `users` WHERE `users`.`login` = :login", ['login' => $_POST['login']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    generate_json_response(false, "Пользвателя с такими данными не существует");
}



$stmt = query("SELECT * FROM `user_token` WHERE `user_token`.`user_id` = $user[id]", []);
$user_token = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user_token) {
    $token = generate_rand_str();
    $stmt = query(
        "INSERT INTO `user_token`(`token`, `date_end`, `user_id`) VALUES (:token, :date, :user_id)",
        ['token' => $token, "date" => time() + 60 * 60 * 2, "user_id" => $user['id']]
    );
    generate_json_response(true, "Пользвоаетель успешно авторизован", ["token" => $token, "user" => $user]);
}

$currentToken = $user_token['token'];

if (time() > $user_token['date_end']) {
    $currentToken = generate_rand_str();
    $stmt = query(
        "UPDATE `user_token` SET `token`= :token, `date_end`= :date WHERE `user_token`.`id` = $user_token[id]",
        ['token' => $currentToken, "date" => time() + 60 * 60 * 2]
    );
}

generate_json_response(true, "Пользвоваетель успешно авторизован", ["token" => $currentToken, "user" => $user]);
