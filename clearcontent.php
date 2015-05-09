<?php
if($_GET["password"]=="minerguy31"){
$file = './content.html';
file_put_contents($file, 'Contents have been cleared. :3 -CONSOLE');
echo 'Contents have been cleared. <br>';
echo '<a href="http://everyonecanedit.tk/">Go to the page -></a>';
} else {
?>
Login Incorrect
<?php 
}
?>
