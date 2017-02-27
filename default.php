<html>
	<head>
		<title>Everyone can edit</title>
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
			table { width: 100%; }
			table.info { height: 100%; }
			td.left { width: 80%; }
			td.right { width: 20%; }
			.header { text-align: center; }
			h2 { text-align: center; }
			.border { border: 1px solid black; }
		</style>
	</head>
	<body>
		<table>
			<tr>
				<td class="left">
					<div class="header">
						<h2>Everyone can edit</h2>
						Originally made by minerguy31 in 2015, reworked by @mcrocks999<br/>
						<a href="https://github.com/mcrocks999/everyonecanedit/">Forked Repository</a><br/>
						<a href="http://everyonecanedit.tk/edit.php">Edit</a>&nbsp;
						<br>
					</div>
					<hr>
					<pre class="wrapword border">
						<?php
							echo stripslashes(strip_tags(file_get_contents('content.html')));
						?>
					</pre>
				</td>
				<td class="right">
					<table class="info border">
						<tr>
							<td>
								<h2>Information Board</h2>
								Current version: 0.1.3.1
								<li>Refractored code, removed adlinks and view counter.</li>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
