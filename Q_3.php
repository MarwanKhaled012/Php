<?php
$b_age = 10;

switch ($b_age) {
    case ($b_age < 5):
        echo "Stay at home";
        break;
    case 5:
        echo "Go to Kindergarten";
        break;
    case ($b_age >= 6 && $b_age <= 12):
        echo "Go to grade";
        break;
    default:
        echo "Age is not in specified ranges";
        break;
}