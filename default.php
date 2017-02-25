<html>
<head>
<title>Everyonecanedit.tk</title>
<style>
table td, table td * {
    vertical-align: top;
}
.wrapword{
white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
white-space: -pre-wrap;      /* Opera 4-6 */
white-space: -o-pre-wrap;    /* Opera 7 */
white-space: pre-wrap;       /* css-3 */
word-wrap: break-word;       /* Internet Explorer 5.5+ */
white-space: -webkit-pre-wrap; /* Newer versions of Chrome/Safari*/
word-break: break-all;
white-space: normal;
}
</style>
</head>
<body>
<table width=100%>
<tr><td width=80%>
<center>

<h2>Everyonecanedit.tk</h2>
The only website on the interweb where <b>everyone</b> can edit with no restrictions! Made by minerguy31<br />
<a href="http://everyonecanedit.tk/edit.php">Edit</a>&nbsp;
<br>

&nbsp;

</center>

<hr>
<pre class="wrapword" style="border: 1px solid black;">
<?php
echo stripslashes(strip_tags(file_get_contents('content.html')));
?>
</pre>
</td><td width=20%>
<table border=1px width=100% height=100%><tr><td>
<center><h2>Information Board</h2></center>
Current version: 0.1
<li>HTML is now disabled because some specific people abused it. </li>
</td></tr></table>
</td></tr>
</table>
</body>
</html>
