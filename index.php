<!DOCTYPE HTML>
<html>  
<body>

<form action="submit.php" method="post">
   <p>IGN: <input type="text" name="ign"/></p>
   <p>Discord Username: <input type="text" name="discorduser"/></p>
   <p>Type: <select name="type">
        <option>Ban</option>
        <option>Mute</option>
   </select></p>
   <p>Reason for punishment: <input type="text" name="reason"/></p>
   <p>Length: <input type="text" name="length"/></p>
   <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>