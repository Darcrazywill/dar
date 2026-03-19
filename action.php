<?php
$name      = $_POST['name'] ?? '';
$email     = $_POST['email'] ?? '';
$gender    = $_POST['gender'] ?? '';
$password  = $_POST['password'] ?? '';
$confirm   = $_POST['password_confirm'] ?? '';

$errors = [];

if ($name === '' || $email === '' || $gender === '' || $password === '' || $confirm === '') {
    $errors[] = 'Все поля обязательны для заполнения.';
}


if ($name!=='Дарина')
{
    $errors[]='Имя должно быть Дарина';
}
if ($password!=='123')
{
    $errors[] = 'Пароль должен быть 123.';
}
if ($password !== $confirm)
{
    $errors[] = 'Пароль и подтверждение пароля не совпадают.';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка регистрации</title>
</head>
<body>
<?php if ($errors): ?>
    <h2>Ошибки:</h2>
    <ul>
        <?php foreach ($errors as $e): ?>
            <li><?= htmlspecialchars($e, ENT_QUOTES, 'UTF-8') ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <h2>Все проверки пройдены!</h2>
<?php endif; ?>
</body>
</html>
