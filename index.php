<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/style1.css" rel="stylesheet" type="text/css"/>
    <title>Создать шаблон страницы</title>
</head>
<body>
    <form name="create_template" action="create_template.php" method="GET">
        <label>Укажите цвет фона:
            <input type="color" name="background"/>
        </label>
        <label>Текст заголовка веб-страницы:
            <input type="text" name="title" value="RedTie"/>
        </label>
        <label>Абсолютный путь к картинке логотипа:
            <input type="url" name="url" value="http://static.oswd.org/designs/3699/RedTie/images/tie_logo.gif"/>
        </label>
        <label>Название сайта:
            <input type="text" name="name_logo" value="RedOTieO"/>
        </label>
        <label>Текст футера:
            <input type="text" name="footer" value="Your Company Name &copy; 2017"/>
        </label>
        <input type="submit" value="Отправить"/>
    </form>
</body>
</html>
