<!DOCTYPE html>
<html>
<head>
    <title>Информационное письмо</title>
</head>
<body>
    <h1>Информационное письмо</h1>
    <p> Уважаемый пользователь  {{ $mailContent['fullname'] }}</p>
    <p>Документ {{ $mailContent['name'] }} был {{ $mailContent['action'] }}. Вы можете найти предыдущую версию по ссылке {{ $mailContent['link'] }} .</p>
     
    <p>Спасибо, что Вы с нами!</p>
</body>
</html>