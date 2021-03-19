<?php

function writeSecretSentence(string $cat, string $dog) :string{
    return $cat < $dog;
};

    echo writeSecretSentence();

?>