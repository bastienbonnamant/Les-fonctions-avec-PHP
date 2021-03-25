<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
     <?php

function writeSecretSentence(string $cat, string $dog) : string {
    $secretSentence = "$cat bat le $dog";
    return $secretSentence;
};

    echo writeSecretSentence("cat", "dog");

?> 
  </body>
</html>