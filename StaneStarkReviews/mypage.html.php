<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML Form</title>

<style type="text/css">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }

body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }


/* ==================== Form style sheet ==================== */

table.form { margin: 25px 0 0 29px; border-collapse: collapse; }

table.form th, table.form td { padding: 4px 5px; text-align: left; font-weight: normal; }

table.form label { font-family: Verdana, Arial, Helvetica, sans-serif; color: #181818; margin-right: 12px; }
table.form td span { font-size: 0.9em; color: #181818; margin-left: 8px; }
table.form td samp { font: 1em Verdana, Arial, Helvetica, sans-serif; color: #000000; }

table.form input { width: 340px; }
table.form input.answer { width: 53px; }
table.form textarea { width: 400px; height: 160px; }

table.form input.inp-text, table.form input.answer, table.form textarea
{ border: 1px solid #909090; padding: 2px; }

table.form th.message-up { vertical-align: top !important; }

table.form label.invisible { visibility: hidden; }

table.form td.submit-button-right { text-align: right !important; }
table.form input.submit-text { font: 1.4em Georgia, "Times New Roman", Times, serif; letter-spacing: 1px; width: auto; }

table.form label.email { border-bottom: 1px dotted #000000; }

/* ==================== Form style sheet END ==================== */

</style>
</head>


<body>

	<form action="" method="post" action="cmntvalidate.php">
		<table class="form">
			<tr>
				<th><label for="name"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label class="email" for="email" title="Will be masked"><strong>E-mail:</strong></label></th>
				<td><input class="inp-text" name="email" id="email" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="web">Web:</label></th>
				<td><input class="inp-text" name="web" id="web" type="text" size="30" /></td>
			</tr>

			<tr>
				<th class="message-up"><label for="message"><strong>Message:</strong></label></th>
				<td>
				<textarea name="message" id="message" cols="30" rows="5"></textarea>
				</td>
			</tr>

			<tr>
				<th><label for="question" class="invisible">Question:</label></th>
				<td><samp>99&nbsp;+&nbsp;11&nbsp;=</samp> &nbsp; <input class="answer" name="antispam" id="question" type="text" size="5" /> 
				<span><strong>(spam protection)</strong></span></td>
			</tr>

			<tr>
				<td class="submit-button-right" colspan="2">
				<input class="submit-text" type="image" src="images/send-button.gif" value="SEND" alt="SEND" title="Send your message" />
				</td>
			</tr>
		</table>
	</form>
     
</body>
</html>
