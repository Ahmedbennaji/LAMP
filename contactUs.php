<?php
require_once 'header.php';

if(!$loggedin)
    die("Log in to contact us</div><footer></footer></body></html>");

if(isset($_GET['view']))
    $view = sanitizeString($_GET['view']);
else 
    $view = $user;

if($view != ""){
    if($view == $user)
    $name1 = $name2 = "Your";
    else{
        $name1 = "<a href='members.php?view=$view'>$view</a>'s";
        $name2 = "$view's";
  }

  echo "<h3>$name1 Information</h3>";
}    
echo <<<_END
<form method='post' action='contactUs.php?view=$view'>
First name: <input type="text" name ="name"><br>
Last name: <input type="text" name ="name"><br>
E-mail: <input type="text" name = "email"><br>
<fieldset data-role="controlgroup" data-type="horizontal">
<textarea name='text'></textarea><br>
</fieldset>
<input data-transition='slide' type="submit">

</form><br>

_END;


require_once 'footer.php';
?>