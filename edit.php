<script language="JavaScript">
function disableCtrlKeyCombination(e)
{
	//list all CTRL + key combinations you want to disable
	var forbiddenKeys = new Array('a');
	var key;
	var isCtrl;

	if(window.event)
	{
		key = window.event.keyCode;     //IE
		if(window.event.ctrlKey)
                        isCtrl = true;
                else
                        isCtrl = false;
	}
	else
	{
		key = e.which;     //firefox
		if(e.ctrlKey)
			isCtrl = true;
		else
			isCtrl = false;
	}

	//if ctrl is pressed check if other key is in forbidenKeys array
	if(isCtrl)
	{
		for(i=0; i<forbiddenkeys .length; i++)
		{
			//case-insensitive comparation
			if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
			{
				alert('Key combination CTRL + '
					+String.fromCharCode(key)
					+' has been disabled.');
				return false;
			}
		}
	}
	return true;
}
</script>
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
<textarea name="text" onKeyPress="return disableCtrlKeyCombination(event);"
3
    onKeyDown="return disableCtrlKeyCombination(event);"><?php echo stripslashes($text)?></textarea>
<input type="submit" value="Save"/>&nbsp;
<a href=".">Cancel</a>
</form>
