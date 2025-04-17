<?php include 'header.php'; ?>

<h2>Enter a Message</h2>
<form method="POST" action="insert.php">
    <input type="text" name="message" required>
    <input type="submit" value="Submit">
</form>

<br>
<a href="showAll.php"target="_blank">Show all records</a>

</body>
</html>