<html>
<head>
<title>Everyonecanedit.tk</title>
<script type="text/javascript" src="http://coinurl.com/script/jquery-latest.min.js"></script>
<style>
table td, table td * {
    vertical-align: top;
}
</style>
<script type="text/javascript">
$(function() {
    var include = Array();
    //Leave empty to convert all links on the page or specify keywords
    //which URL must contain to be processed
    
    var exclude = Array("everyonecanedit.tk/edit.php");
    //Specify keywords which URL must not contain to be processed
    
    var id = "172053fe29b7083d6f893f15ac029c55";
    var redirect = "http://cur.lv/redirect.php?id=" + id + "&url=";
    var links = $("a[href^='http']");
    
    for(var i = 0; i < links.length; i++) {
        var url = $(links[i]).attr("href");
        
        var deny = false;
        for(var j = 0; j < exclude.length; j++) {
            if(url.indexOf(exclude[j]) != -1) {
                deny = true;
                break;
            }
        }
        if(deny) {
            continue;
        }
        
        if(include.length > 0) {
            var allow = false;
            for(var j = 0; j < include.length; j++) {
                if(url.indexOf(include[j]) != -1) {
                    allow = true;
                    break;
                }
            }
            if(!allow) {
                continue;
            }
        }
        
        $(links[i]).attr("href",  redirect + encodeURIComponent(url));
    }
});
</script>
</head>
<body>
<table width=100%>
<tr><td width=80%>
<center>

<h2>Everyonecanedit.tk</h2>
The only website on the interweb where <b>everyone</b> can edit with no restrictions! Made by minerguy31<br />
<a href="http://everyonecanedit.tk/edit.php">Edit</a>&nbsp;

<a href="http://www.easycounter.com/">
<img src="http://www.easycounter.com/counter.php?minerguy31"
border="0" alt="Free Web Counter"></a>
<br>

&nbsp;

</center>

<hr>
<pre>
<?php
echo stripslashes(strip_tags(file_get_contents('content.html')));
?>
</pre>
</td><td width=20%>
<table border=1px width=100% height=100%><tr><td>
<center><h2>Information Board</h2></center>
<li>HTML is now disabled because some specific people abused it. </li>
</td></tr></table>
</td></tr>
</table>
</body>
</html>
