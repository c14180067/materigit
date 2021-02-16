<html>
    <head>
        <title>Latihan Git</title>
    </head>
    <body>
        <h2>C14180067 - Alfonsus Enrico</h2>
        Select any date
    <form method="post" action="">
        <input type="date" name="date"/>
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $now = date("Y-m-d");
            $selected = $_POST['date'];
            $value = ((abs(strtotime($now)-strtotime($selected)))/(60*60*24));
            echo $value." days";
        }
    ?>
    </body>
</html>