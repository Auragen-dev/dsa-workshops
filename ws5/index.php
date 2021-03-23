
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Workshop 5</title>
    <meta name="description" content="Workshop 5">
    <meta name="author" content="Lewis Ingram">


</head>

<body>
<form action="/ws5/weather.php" method="get">
<select class="site" name="site">
    <option value="" disabled selected>Select a weather station:</option>
    <option value="http://www.martynhicks.uk/weather/clientraw.txt">Horfield (Bristol)</option>
    <option value="http://www.thornburyweather.co.uk/weatherstation/clientraw.txt">Thornbury (Bristol)</option>
    <option value="https://www.glosweather.com/clientraw.txt">Gloucestershire</option>
    <option value="http://www.newquayweather.com/clientraw.txt">Newquay (Cornwall)</option>
</select> <input type="submit">
</form>

</body>

</html>
