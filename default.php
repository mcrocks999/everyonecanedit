<html>
	<head>
		<title>Everyonecanedit.tk</title>
		<style>
			table td, table td * { vertical-align: top; }
			.wrapword{
				white-space: -moz-pre-wrap !important;
				white-space: -pre-wrap;
				white-space: -o-pre-wrap;
				white-space: pre-wrap;
				word-wrap: break-word;
				white-space: -webkit-pre-wrap;
				word-break: break-all;
				white-space: normal;
			}
		</style>
	</head>
	<body>
		<table width=100%>
			<tr>
				<td width=80%>
					<center>
						<h2>Everyone can edit</h2>
						Originally made by minerguy31 in 2015, reworked by @mcrocks999<br/>
						<a href="https://github.com/mcrocks999/everyonecanedit/">Repository</a><br/>
						<a href="http://everyonecanedit.tk/edit.php">Edit</a>&nbsp;
						<br>
					</center>
					<hr>
					<pre class="wrapword" style="border: 1px solid black;">
						<?php
							echo stripslashes(strip_tags(file_get_contents('content.html')));
						?>
					</pre>
				</td>
				<td width=20%>
					<table border=1px width=100% height=100%>
						<tr>
							<td>
								<center><h2>Information Board</h2></center>
								Current version: 0.1.3
								<li>Refractored code, removed adlinks and view counter.</li>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
