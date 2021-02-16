<html>
    <head>
        <title>Latihan Git</title>
    </head>
    <body>
        <h2>C14180067 - Alfonsus Enrico</h2>
        Select any date
    <form method="post" action="">
        <input type="date1" name="date1"/>
        <input type="date2" name="date2"/>
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            $value = ((abs(strtotime($date1)-strtotime($date2)))/(60*60*24));
            echo $value." days";
        }
    ?>
    </body>
</html>