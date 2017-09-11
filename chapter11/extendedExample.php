<?php
include('exampleData.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Chapter 11</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">    
    <link rel="stylesheet" href="css/extendedExample.css" />

</head>
<body>
<form>
  <fieldset>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>">

    <label for="mail">Email:</label>
    <input type="email" id="mail" name="email" value="<?php echo $email; ?>">

    <label for="interests">Interests:</label>
    <select id="interests" name="interests">
        <?php
        for ($i=0; $i<5; $i++) {
            $count = $i + 1;
            echo "<option>Interest " . $count . "</option>";
        }
        ?>
    </select>
    <button type="submit">Contact us</button>
  </fieldset>
  
</form>  
</body>
</html>