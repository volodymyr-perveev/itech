<!DOCTYPE HTML>
<html>
<head>
    <title>Lab3</title>
    <script src ="ajax.js"></script>
</head>
<body>
    <h3>Первеев В.Д. КИУКИ-19-5</h3>
    <p>Films by genre <select name="genre" id="genre">
            <?php
            include 'conn.php';
            $sqlSelect = "SELECT DISTINCT title FROM $db.genre";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[0]);
                echo "</option>";
            }
            ?>
        </select>
        <button onclick="textFunc()"> ОК </button></p>

        <p>Films by actor <select name="actor" id="actor">
            <?php
            include 'conn.php';
            $sqlSelect = "SELECT DISTINCT name FROM $db.actor";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[0]);
                echo "</option>";
            }
            ?>
        </select>
        <button onclick="XMLFunc()"> ОК </button></p>


        <p>Films by date <select name="date_1" id="date_1">
            <?php
            include 'conn.php';
            $sqlSelect = "SELECT DISTINCT date FROM $db.FILM";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[0]);
                echo "</option>";
            }
            ?>
        </select>
        <select name="date_2" id="date_2">
            <?php
            include 'conn.php';
            $sqlSelect = "SELECT DISTINCT date FROM $db.FILM";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[0]);
                echo "</option>";
            }
            ?></p>
        </select>
        <button onclick="JSONFunc()"> ОК </button>
<div id= "result"></div>
</body>

</html>