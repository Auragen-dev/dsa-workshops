<!doctype html>
<html lang="en">

<head>
    
    <?php 
    try{
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="quotes.csv"');
    $csv = fopen('php://output', 'wb'); die("Unable to open file!");
    $quote = $_POST['quote'];
    $source = $_POST['source'];
    $dob = $_POST['dob'];
    $dod = $_POST['dod'];
    $wplink = $_POST['wplink'];
    $wpimg = $_POST['wpimg'];
    $category = $_POST['category'];
    $csvInput = $quote . "|" . $source . "|" . $dob . "|" . $dod . "|" . $wplink . "|" . $wpimg . "|" . $category;
    fputcsv($csv, csvInput);
    fclose($csv);
    }
    ?>
    <meta charset="utf-8">
    <title>ws4</title>
    <meta name="description" content="worksheet 4">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>

    <form action="index.php" method="post">
        <label for="quote">Quote:</label>
        <textarea type="text" id="quote" name="quote" maxlength="2048" required> </textarea><br>
        <label for="source">Source:</label>
        <input type="text" id="source" name="source" maxlength="32" required><br>
        <label for="dob">Date of birth:</label>
        <input type="date" id="dob" name="dob" required><br>
        <label for="dod">Date of death:</label>
        <input type="date" id="dod" name="dod" value="N/A"><br>
        <label for="wplink">Wikipedia Link:</label>
        <input type="url" id="wplink" name="wplink" value="http://en.wikipedia.org/wiki/" required><br>
        <label for="wpimg">Image link:</label>
        <input type="url" id="wpimg" name="wpimg" required><br>
        <label for="category">Category:</label>
        <select type="text" id="category" name="category" required>
            <option value="Romantic">Romantic</option>
            <option value="Humerous">Humerous</option>
            <option value="Political">Political</option>
        </select><br>
        <input type="submit">
    </form>



    <script src="js/scripts.js"></script>
</body>

</html>
