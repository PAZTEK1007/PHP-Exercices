<?php
if (isset($_GET['submit'])){
    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'unchecked';
    $hello = ($gender == 'male') ? '<br> Hello Man'  : '<br> Hello Female';
    echo $hello;
}
?>
<form method="get" action="">
    <label for="gender">What your gender ? </label>
    <label for="male">Boy</label>
    <input type="radio" name="gender" value="male">
    <label for="female">Girl</label>
    <input type="radio" name="gender" value="female">
    <input type="submit" name="submit" value="Send my gender">
</form>