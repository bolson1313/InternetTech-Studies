<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

//Wyświetlenie owoców z pętlą foreach z { }
print "Petla z forach: ";
foreach($fruits as $value) {
    print $value. ", ";
}
unset($value);



//Wyświetlenie owoców z pętlą foreach z endforeach
print "\nPetla z endforeach: ";
foreach($fruits as $fruit):
    print $fruit. ", ";
endforeach;

?>