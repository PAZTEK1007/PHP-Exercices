<?php
if (isset($_GET['submit'])){
    $race = isset($_GET['race']) ? $_GET['race'] : 'unchecked';;
    $hello = ($race == 'human') ? '<iframe src="https://giphy.com/embed/112Yxrn5oRjPbi" width="480" height="269" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/imagine-112Yxrn5oRjPbi">Hello HUMAN !</a></p>'  : (($race == 'cat') ? '<iframe src="https://giphy.com/embed/CqVNwrLt9KEDK" width="480" height="382" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-funny-lol-CqVNwrLt9KEDK">Hello Cat !</a></p>' : '<iframe src="https://giphy.com/embed/lN1MTl03Qls145LJ3w" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/PlayWonderlands-unicorn-day-butt-stallion-lN1MTl03Qls145LJ3w">Hello Unicorn !</a></p>');
    
    echo $hello;
        
        /*switch($race){
        case 'human':
            echo '<iframe src="https://giphy.com/embed/112Yxrn5oRjPbi" width="480" height="269" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/imagine-112Yxrn5oRjPbi">Hello HUMAN !</a></p>';
            break;
        case 'cat':
            echo '<iframe src="https://giphy.com/embed/CqVNwrLt9KEDK" width="480" height="382" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-funny-lol-CqVNwrLt9KEDK">Hello Cat !</a></p>' ;
            break;
        case 'unicorn':
            echo '<iframe src="https://giphy.com/embed/lN1MTl03Qls145LJ3w" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/PlayWonderlands-unicorn-day-butt-stallion-lN1MTl03Qls145LJ3w">Hello Unicorn !</a></p>';
            break;
    }*/
}
?>



<form method="get" action="">
    <label for="gender">What Are You ? </label>
    <label for="human">Human</label>
    <input type="radio" name="race" value="human">
    <label for="cat">Cat</label>
    <input type="radio" name="race" value="cat">
    <label for="unicorn">Unicorn</label>
    <input type="radio" name="race" value="unicorn">
    <input type="submit" name="submit" value="What i am?">
</form>