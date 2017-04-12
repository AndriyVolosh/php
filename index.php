<!DOCTYPE html>
<html>
    <head>
        <title>Convertor</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form name="convertor" action="convertor.php" method="POST">
            <div class="form-item">
                <label>From:<input type="number" name="from_val"></label>
                <select name="from_units">
                    <option value="m">метры</option>
                    <option value="in">дюймы</option>
                    <option value="ft">футы</option>
                    <option value="mil">мили</option>
                </select>
            </div>
            <div class="form-item">
                <label>To:
                    <select name="to_units">
                        <option value="m">метры</option>
                        <option value="in">дюймы</option>
                        <option value="ft">футы</option>
                        <option value="mil">мили</option>
                    </select>
                </label>
            </div>
            <div class="form-item">
                <input type="submit" value="Конвертировать"/>
            </div>
        </form>
    </body>
</html>
