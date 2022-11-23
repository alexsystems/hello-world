<?php
foreach (glob("includes/models/*.php") as $filename){
    include $filename;
}

$user = new User("John","Doe");

echo $user->getFirstName();

