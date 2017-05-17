<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$formName = $_post["signUpForm"];
$name = $_post['firstName'];
$lastName = $_post["lastName"];
$email = $_post["email"];
$country = $_post["country"];
$password = $_post["password"];
$passwordConfirm = $_post["cPassword"];
$btnSubmit = $_post["btnSub"];

/* validation testing */
if (isset($_post['btnSubmit'])) {
    echo '<h1>clicked</h1>';
    if (!empty($_post['name'])) {
        echo 'Name field is empty';
    }
    else {
                echo "ahoo";
            }
}
echo 'youve clicked';
