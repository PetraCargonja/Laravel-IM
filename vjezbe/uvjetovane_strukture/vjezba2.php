<?php

switch (date('N')) {
    case 1:
        echo "Danas je ponedjeljak\n";
        break;
    case 2:
        echo "Danas je utorak\n";
        break;
    case 3:
        echo "Danas je srijeda\n";
        break;
    case 4:
        echo "Danas je četvrtak\n";
        break;
    case 5:
        echo "Danas je petak\n";
        break;
    case 6:
        echo "Danas je subota\n";
        break;
    case 7:
        echo "Danas je nedjelja\n";
        break;
    default:
        echo "Nepoznat dan\n";
        break;
}