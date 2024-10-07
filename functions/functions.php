<?php

function isPalindrome($word)
{
    $answer = false;
    if (($word) === strrev(($word))) {
        $answer = true;
    }
    return $answer;
}