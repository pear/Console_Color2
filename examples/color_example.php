<?php
require 'Console/Color.php';

error_reporting(E_ALL);
// Let's add a little color to the world
// %n resets the color so the following stuff doesn't get messed up
print Console_Color::convert("%bHello World!%n\n"); 
// Colorless mode, in case you need to strip colorcodes off a text
print Console_Color::convert("%rHello World!%n\n", false);
// The uppercase version makes a colorcode bold/bright
print Console_Color::convert("%BHello World!%n\n");
// To print a %, you use %%
print Console_Color::convert("3 out of 4 people make up about %r75%% %nof the " 
                            ."world population.\n");
// Or you can use the escape() method.
print Console_Color::convert("%y"
     .Console_Color::escape('If you feel that you do everying wrong, be random'
                           .', there\'s a 50% Chance of making the right '
                           .'decision.')."%n\n");
                            
?>

