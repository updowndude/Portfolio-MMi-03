<?php include '../includes/head.php'; ?>
<title>Contact</title>
</head>

<body class="b4">
<div id="stuff">
<div id="container">
<?php include '../includes/nav.php'; ?>
   <?php include '../includes/aside.php'; ?>
    <div id="content">

    <form onSubmit="return checkform(this);" method="post" action="../php/mailer.php">
    	<fieldset id="emailer">
            <label>Name </label><input type="text" name="nname"><br>
            <label>Email </label><input type="text" name="email"><br>
            <label>Verify Email </label><input type="text" name="email2"><br>
            <label>Message </label><textarea name="message"></textarea>
        </fieldset>
        <div id="buttons">
        	<input type="submit" value="Send Message">
            <input type="reset" value="Start Over">
        </div>
    </form>
    </div>
    </div>
<?php include '../includes/footer.php'; ?> 