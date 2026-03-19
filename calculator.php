<?php
$a = $_POST['a'] ?? '';
$b = $_POST['b'] ?? '';

$result = null;
$error  = '';
$op     = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($a === '' || $b === '') {
        $error = 'Заполните оба числа.';
    } else {
        $aVal = (float)$a;
        $bVal = (float)$b;

        if (isset($_POST['add'])) {
            $op = '+';
            $result = $aVal + $bVal;
        } elseif (isset($_POST['sub'])) {
            $op = '−';
            $result = $aVal - $bVal;
        } elseif (isset($_POST['mul'])) {
            $op = '*';
            $result = $aVal * $bVal;
        } elseif (isset($_POST['div'])) {
            $op = '/';
            if ($bVal == 0.0) {
                $error = 'Деление на ноль невозможно.';
            } else {
                $result = $aVal / $bVal;
            }
        } else {
            $error = 'Не выбрана операция.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<h1>Простой калькулятор</h1>

<form method="post">
    <input type="number" step="any" name="a"
           value="<?= htmlspecialchars($a, ENT_QUOTES, 'UTF-8') ?>" required>

    <input type="number" step="any" name="b"
           value="<?= htmlspecialchars($b, ENT_QUOTES, 'UTF-8') ?>" required>

    <button type="submit" name="add">+</button>
    <button type="submit" name="sub">−</button>
    <button type="submit" name="mul">*</button>
    <button type="submit" name="div">/</button>
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <?php if ($error): ?>
        <p style="color:red">
            <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
        </p>
    <?php else: ?>
        <p>
            Результат:
            <?= htmlspecialchars($a . ' ' . $op . ' ' . $b . ' = ' . $result, ENT_QUOTES, 'UTF-8') ?>
        </p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>

