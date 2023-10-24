<?php

$family =  array(
    0 => 'Marc',
    1 => 'Veronique',
    2 => 'Melisandre',
    3 => 'Maxence'
);
print_r($family);
var_dump($family);

$recipe = array(
    0 => 'pasta',
    1 => 'french fries',
    2 => 'pizza',
    3 => 'hamburger',
    4 => 'sushi'
);
print_r($recipe);

$movies = array(
    0 => 'The Lord of the Rings',
    1 => 'Star Wars',
    2 => 'The Matrix',
    3 => 'Harry Potter',
    4 => 'The Hobbit',
    5 => 'The Hunger Games'
);
print_r($movies[1]);

$me = array(
    'firstname' => 'Mathias',
    'lastname' => 'Barbier',
    'age' => 25,
    'favoriteSeason' => 'Summer',
    'likeSoccer' => false,
    'hobbies' => array(
        0 => 'Video games',
        1 => 'Cars',
        2 => 'Music',
        3 => 'Programming',
    ),
    'father' => array(
        'firstname' => 'Marc',
        'lastname' => 'Barbier',
        'age' => 59,
        'favoriteSeason' => 'Summer',
        'likeSoccer' => true,
        'hobbies' => array(
            0 => 'Cars',
            1 => 'Photography',
            2 => 'Astronomy',
            3 => 'New-technologies',
            4 => 'Movies'

        )
    )
);

$soulmate = array(
    'firstname' => 'Emmy',
    'lastname' => 'Krzyszkowski',
    'age' => 18,
    'favoriteSeason' => 'Summer',
    'likeSoccer' => false,
    'hobbies' => array(
        0 => 'Horse',
        1 => 'Horse',
        2 => 'Pets and animals',
        3 => 'Horse',
    ),
);

$number = count($me['father']['hobbies']);
array_push($me['hobbies'], 'Taxidermy');
$me['lastname'] = 'Durand';

$possible_hobbies_via_soulmate = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possbile_hobbies_via_me = array_merge($me['hobbies'], $soulmate['hobbies']);

/* echo "<pre>";
print_r($me);
                    //Uncioment to see the array
echo "</pre>";
echo $number;
*/
                    //Uncomment to see the result of MERGE and INTERSECT
/*
print_r($possible_hobbies_via_soulmate);
print_r($possbile_hobbies_via_me);
*/
$web_development = array(
    'frontend' => array(),
    'backend' => array()
);

array_push($web_development['frontend'], 'xhtml');
array_push($web_development['backend'], 'Ruby on Rails');
array_push($web_development['frontend'], 'CSS');
array_push($web_development['frontend'], 'Flash');
array_push($web_development['frontend'], 'Javascript');

//Uncomment for replace xhtml by html AND delete Flash

// $web_development['frontend'][0] = 'html';
// unset($web_development['frontend'][2]);

echo "<pre>";
print_r($web_development);
echo "</pre>";




?>