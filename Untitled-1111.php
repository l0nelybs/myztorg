<?php
if(isset($_REQUEST['submit'])){
if(isset($_REQUEST['test'])){
echo implode(', ', $_REQUEST['test']) ;
}else {
echo "Вы ничего не выбрали";
}
}

?>

<form method="GET">

<p>Какие языки Вы знаете ?</p>


<input type="checkbox" name="test[]" value="html" /> html
<input type="checkbox" name="test[]" value="css" /> css
<input type="checkbox" name="test[]" value="php" /> php
<input type="checkbox" name="test[]" value="javascript" /> javascript

<input type="submit" name="submit" value="clik mi"/>
</form>
