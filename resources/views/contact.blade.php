
@extends('layouts.app')
<ul id="ligne">
<li><a href="Planning.pdf" style="color:red;" target="_blank">Services</a></li> 
<li><a href="work.html" style="color:red;" target="_self">Tarifs</a></li> 
<li><a href="contact.php" style="color:red;" target="_blank">Contact</a></li>
</ul>

<form action="contact.php" method="post" class="form-example">
  <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <label for="email">Enter your second email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Subscribe!">
  </div>
</form>

<?php 
    echo $_POST["name"] . ' ' . $_POST["email"];
    ?>

<center>©3iSystem2022 </center>
</body>
</html>
