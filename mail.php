<meta charset="utf-8">
<?php
$urok = "Онлайн запись";
error_reporting(E_ERROR);   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы	


if (isset($_POST['name'])) {
    $name            = $_POST['name'];
    if ($name == '') {
        unset($name);
    }
}


if (isset($_POST['email'])) {
    $email        = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
}
if (isset($_POST['tel'])) {
    $tel            = $_POST['tel'];
    if ($tel == '') {
        unset($tel);
    }
}
if (isset($_POST['time'])) {
    $time            = $_POST['time'];
    if ($time == '') {
        unset($time);
    }
}
if (isset($_POST['usluga'])) {
    $usluga            = $_POST['usluga'];
    if ($usluga == '') {
        unset($usluga);
    }
}
if (isset($_POST['pozh'])) {
    $pozh            = $_POST['pozh'];
    if ($pozh == '') {
        unset($pozh);
    }
}


// //стирание треугольных скобок из полей формы
if (isset($name)) {
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
}
if (isset($email)) {
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
}
if (isset($tel)) {
    $tel = stripslashes($tel);
    $tel = htmlspecialchars($tel);
}
if (isset($time)) {
    $time = stripslashes($time);
    $time = htmlspecialchars($time);
}
if (isset($usluga)) {
    $usluga = stripslashes($usluga);
    $usluga = htmlspecialchars($usluga);
}
if (isset($pozh)) {
    $pozh = stripslashes($pozh);
    $pozh = htmlspecialchars($pozh);
}

// // адрес почты куда придет письмо
$address = "debosh.nails@gmail.com";
// текст письма 
$note_text = "Тема : $urok \r\nИмя : $name \r\n Email : $email \r\n телефон : $tel \r\n время записи : $time \r\n услуга : $usluga \r\n пожелания : $pozh ";

if (isset($name)) {
    mail($address, $urok, $note_text, "Content-type:text/plain; windows-1251");
    // сообщение после отправки формы
    echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name</b> Ваша заявка отправлена успешно. <br> Спасибо. <br>Менеджер свяжется с Вами по телефону <b> $tel</b>.</p>";
}

?>