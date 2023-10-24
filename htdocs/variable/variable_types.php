<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php $firstName = 'Mathias';
          $age = 25;
          $eyes = "green";
          $family = array(
          0 => 'Mathias',
          1 => 'Marc',
          2 => 'Maxence',
          3 => 'Melisandre'
          );
          $temperature = 0;

      ?>
    	<p>Hi!My name is <?php echo $firstName; ?>!</p>
    	<p>I am <?php echo $age; ?> years old!</p>
    	<p>My eyes are <?php echo $eyes; ?>!</p>
      <p>The first person in my family is <?php echo $family[0]; ?>!</p>

      <?php
      if( $temperature >= 15 ) {
        $clothes = "T-shirt";
        $should_i_wear_a_scarf = false;

      } else {
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
      }
      
      if ($should_i_wear_a_scarf == true){
        grab_scarf_from_door_hanger();
      }
      cover_my_chest_with($clothes);
      ?>
  </body>
</html>