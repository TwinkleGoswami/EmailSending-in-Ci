<html>
<head>
    <title>Email sending in ci </title>
</head>
<body>
<center>
<table border="1">
    <h2>Send Email Using Codeigniter</h2>
<form name="Email_form" method="post" action="<?php echo base_url().'Email_controller/send_mail'?>">
    <tr>
        <td>Email Id :</td>
        <td><input type="email" name="email" required /></td>
    </tr>

    <tr>
        <td>Subject</td>
        <td><input type="text" name="subject" required /></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><textarea name="message" required ></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="submit"/></td>
    </tr>
</form>
</center>
</table>
</body>
</html>