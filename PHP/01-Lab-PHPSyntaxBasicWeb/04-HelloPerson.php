<form>
    Name: <input type="text" name="person" />
    <input type="submit" />
    <?php
    if (isset($_GET['person'])){
        $person = htmlspecialchars($_GET['person']);
        echo "Hello, $person!";
    }
    ?>
</form>