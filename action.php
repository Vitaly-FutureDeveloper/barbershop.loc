<?php

//
$range = $_POST['range'];
$grid = $_POST['grid'];
$features = $_POST['features'];

//Приём переменных с входов логина и пароля
$login = $_POST['login'];
$password = $_POST['pass'];
$remember = $_POST['remember'];

if ($range != null || $grid != null || $features != null) {
echo ("Вертушок, цена: " . $range . "<br>");
echo ("Выбраная сетка: " . $grid . "<br>");
echo ("Выбраные особенности: ");
    foreach ($features as $i){
        echo ($i . ", ");
    }
}

if ($login != null || $password != null || $remember != null) { //Переписать, чтоб считал кол-во букв в слове
    echo ("<p>Логин: " . $login . "</p>");
    echo ("<p>Пароль: " . $password . "</p>");
    var_dump ($password);
    echo ("<p>Запоминалка: " . $remember . "</p>");
}
else {
    echo ("Вы не ввели данные!");
}

function setup($x) {
    $i = 0;
    return function() use ($x, &$i){
        return $x[$i++];
    };
}
$next = setup(['a', 'b', 'c']);
echo $next();
echo $next();
echo $next();
echo $next() . "<br><br>";



?>