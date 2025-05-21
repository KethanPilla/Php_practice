<?php session_start();

function interested($jobs, $skills, $total) {
    if (!str_contains($jobs, "C++")) {
        return false;
    }
    if ($skills >= $total / 2) {
        return true;
    }
    return false;
}

$return_value = interested($_SESSION['jobs'], $_COOKIE['NUM_SKILLS'], 8);

if ($return_value) {
    echo "you are accepted for an interview";
} else {
    echo "sorry, your application was rejected";
}

