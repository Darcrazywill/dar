<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page">
    <div class="card">
        <h1 class="card__title">Регистрация</h1>

        <form class="form" action="action.php" method="POST">
            <label class="form__group">
                <span class="form__label">Имя:</span>
                <input class="form__input" type="text" name="name" placeholder="Введите имя">
            </label>

            <label class="form__group">
                <span class="form__label">Почта:</span>
                <input class="form__input" type="email" name="email" placeholder="name@example.ru">
            </label>

            <label class="form__group">
                <span class="form__label">Пароль:</span>
                <input class="form__input" type="password" name="password" placeholder="Введите пароль">
            </label>
            <label class="form__group">
        <span class="form__label">Пол:</span>
        <select class="form__input" name="gender">
            <option value="" selected disabled>Выберите пол</option>
            <option value="female">Женский</option>
            <option value="male">Мужской</option>
            <option value="other">Другое</option>
        </select>
    </label>
            <label class="form__group">
                <span class="form__label">Подтвердите пароль:</span>
                <input class="form__input" type="password" name="password_confirm" placeholder="Повторите пароль">
            </label>

            <button class="form__submit" type="submit">Зарегистрироваться</button>

            <label class="form__agree">
                <input type="checkbox" checked>
                <span>
                    Создавая учетную запись, вы соглашаетесь с нашим
                    <a href="#">Условием и конфиденциальностью</a>.
                </span>
            </label>
        </form>
    </div>
</div>

</body>
</html>




