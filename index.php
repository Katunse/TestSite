<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма ввода артикула</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Введите артикула</h2>
    <form method="POST">
        <input type="text" name="articul" required placeholder="Введите артикул">
        <input type="submit" value="Отправить">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['articul'])): ?>
        <h3>Вы ввели:</h3>
        <table>
            <tr>
                <th>Артикул</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_POST['articul']); ?></td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>