<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta content="width = device-width, initial-scale = 1, maximum-scale = 1" name="viewport">

    <title>web4</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="col-12 mx-auto">

    <h2 id="form_">Форма</h2>

    <form action="" method="POST" class="d-block" id="form">

        <label class="form-label">
            Имя:
            <input name="field-name" class="form-control" placeholder="Введите своё имя">
        </label> <br>

        <label class="form-label">
            Email:
            <input name="field-email" class="form-control" type="email" placeholder="Введите вашу почту">
        </label><br>

        <label class="form-label">
            Дата рождения:
            <input name="field-date" name="field-birthday" class="form-control" value="2000-01-01" type="date">
        </label><br>

        Пол:
        <div class="form-check-inline"><label class="form-label"><input type="radio" class="form-check-input"
                                                                        name="radio-group-1"
                                                                        value="Man">Мужской</label></div>
        <div class="form-check-inline"><label class="form-label"><input type="radio" class="form-check-input"
                                                                        checked="checked" name="radio-group-1"
                                                                        value="Female">Женский</label><br></div><br>

        Количество конечностей:
        <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input"
                                                                              name="radio-group-2" value="0">0</label>
        </div>
        <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input"
                                                                              name="radio-group-2" value="1">1</label>
        </div>
        <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input"
                                                                              name="radio-group-2" value="2">2</label>
        </div>
        <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input"
                                                                              name="radio-group-2" value="3">3</label>
        </div>
        <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input"
                                                                              checked="checked" name="radio-group-2"
                                                                              value="4">4</label></div>
        <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input"
                                                                              name="radio-group-2"
                                                                              value="5">5</label><br></div>
        <br>

        <label class="form-label">
            Сверхспособности:
            <select name="field-power[]" class="form-control" multiple="multiple">
                <option value="Immortality">Бессмертие</option>
                <option value="Levitation">Левитация</option>
                <option value="Telepathy" selected="selected">Телепатия</option>
                <option value="Telekinesis">Телекинез</option>
            </select>
        </label><br>

        <label class="form-label">
            Биография:
            <textarea name="field-biography" class="form-control" placeholder="Расскажите о себе"></textarea>
        </label><br>

        <label class="form-label">С контрактом ознакомлен (-а)<input type="checkbox" class="form-check-input" name="check-1"></label><br>

        <input type="submit" class="btn btn-primary" value="Отправить">

    </form>
</div>

</body>

</html>