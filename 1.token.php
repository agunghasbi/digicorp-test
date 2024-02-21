<?php 

$tokens = [];

function generate($user){
    global $tokens;

    if (isset($tokens[$user]) && count($tokens[$user]) == 10) {
        // Delete first token if generated more than 10 token
        array_shift($tokens[$user]);
    }
    $token = rtrim(base64_encode(md5(microtime())),"=");
    $tokens[$user][] = $token;

    return $token;
}

function verify_token($user, $token){
    global $tokens;

    if (isset($tokens[$user]) && in_array($token, $tokens[$user])) {
        // Delete Token if found
        unset($tokens[$user][array_search($token,$tokens[$user])]);
        // Reorder array key
        $tokens[$user] = array_values($tokens[$user]);

        return true;
    }else{
        return false;
    }
}


// Example usage

// $firstToken = generate('Agung');
// var_dump($firstToken);
// for ($i=1; $i <= 10; $i++) { 
//     generate('Agung');
// }

$findToken = $tokens['Agung'][0];
var_dump(verify_token('Agung',$findToken));
var_dump(verify_token('Agung',$findToken));
