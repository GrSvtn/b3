<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>b3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id = "form">
        <form action="" method="post">
            <label>
                Имя:
                <input name="name" placeholder="Введите ваше имя" class = "form">
            </label> <br>

            <label>
                Email:
                <input name="email" type="email" placeholder="Введите вашу почту" class = "form">
            </label><br>

            <label>
                Дата рождения:
                <input name="birthday" type="date" class = "form">
            </label><br>

            <label>
                Пол:
                <input type="radio" name="gender" value="M" class = "form">Мужской</label>
            <label><input checked = "checked" type="radio" name="gender" value="F" class = "form">Женский</label><br>

            <label>
                Количество конечностей:
                <input type="radio" name="limbs" value="4" class = "form" checked = "checked">4</label>
            <label><input type="radio" name="limbs" value="3" class = "form">3</label>
            <label><input type="radio" name="limbs" value="2" class = "form">2</label>
            <label><input type="radio" name="limbs" value="1" class = "form">1</label><br>

            <label>
                Сверхспособности:
                <select name="superpowers[]" multiple class = "form">
                    <option value="immortality">Бессмертие</option>
                    <option value="levitation">Левитация</option>
                    <option value="telepathy">Телепатия</option>
                    <option value="telekinesis">Телекинез</option>
                </select>
            </label><br>

            <label>
                Биография:
                <textarea name="bio" placeholder="Расскажите о себе" class = "form"></textarea>
            </label><br>

            <label><input type="checkbox" name="contract" class = "form">С контрактом ознакомлен (-а)</label><br>

            <input class = "form" type="submit" value="Отправить">

        </form>
    </div>
</body>
</html>
