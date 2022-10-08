<?php
for ($i=1; $i<= 10; $i++) { 
    ${"x".$i} = "$i";
    print ${"x".$i};
}