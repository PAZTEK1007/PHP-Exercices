<?php

    $number = 1;
    while($number <= 120){
       // echo $number . "<br>"; //Uncomment to see the result
        $number++;
    }

    for ($number = 1; $number <= 120; $number++){
        // echo $number . "<br>"; //Uncomment to see the result
    }

$keller6 = array(
    0 => 'Alexandre',
    1 => 'Alexandre',
    2 => 'Antoine',
    3 => 'Bastien',
    4 => 'Carole',
    5 => 'Elisabeth',
    6 => 'Elodie',
    7 => 'Justin',
    8 => 'Justine',
    9 => 'Kimi',
    10 => 'Layla',
    11 => 'Lidwine',
    12 => 'Mathias',
    13 => 'Okly',
    14 => 'Robin',
    15 => 'Rosalie',
    16 => 'Stephane',
    17 => 'Tim',
    18 => 'Tom',
    19 => 'Valentin',
    20 => 'Virginie'

);
for ($i = 0; $i < count($keller6); $i++){
   // echo $keller6[$i] . "<br>"; //Uncomment to see the result 
}


$countries = array(
    'BE' => 'Belgium',
    'FR' => 'France',
    'DE' => 'Germany',
    'NL' => 'Netherlands',
    'ES' => 'Spain',
    'CH' => 'Switzerland',
    'UK' => 'United Kingdom',
    'US' => 'United States',
    'CA' => 'Canada',
    'BR' => 'Brazil',
    'AU' => 'Australia',
    'JP' => 'Japan',
    'CN' => 'China',
    'IN' => 'India',
    'RU' => 'Russia',
    'ZA' => 'South Africa',
    'MA' => 'Morocco',
    'DZ' => 'Algeria',
    'SN' => 'Senegal',
    'TN' => 'Tunisia',
    'AO' => 'Angola',
    'PT' => 'Portugal',
    'IT' => 'Italy',
    'GR' => 'Greece',
    'AR' => 'Argentina',
    'CL' => 'Chile',
    'MX' => 'Mexico'

);

?>
<label for="select-country">Choose a country:</label>

<select id="select-country">
  <option value="">-- Choose your country --</option>
  
<?php

foreach($countries as $key => $value){
    echo "<option value='$key'>$value</option>";
}

?>
</select>