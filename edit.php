<?php

// configuration
$url = 'http://everyonecanedit.tk';
$file = './content.html';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<style>
textarea {
width: 100%;
height: 90%;
}
</style>
<!-- HTML form -->
<form action="" method="post">
<textarea name="text" 3><?php echo stripslashes($text)?></textarea>
<input type="submit" value="Save"/>&nbsp;
<a href=".">Cancel</a>
</form>
