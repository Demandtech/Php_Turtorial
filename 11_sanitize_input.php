<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

// $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

echo $name;
echo $age;
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <div>
    <label for="name">Name:</label>
    <input name='name' type="text">
  </div>
  <div>
    <label for="age">Age:</label>
    <input name='age' type="text">
  </div>
  <input type="submit" value="Submit">
</form>

