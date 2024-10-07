<?php

function isPalindrome($word)
{
    $answer = false;

    for ($i = 0; $i < strlen($_GET['word']); $i++) {
        if ($_GET['word'] === strrev($_GET['word'])) {
            $answer = true;
        }
    }

    return $answer;
}