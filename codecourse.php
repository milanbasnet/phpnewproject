<?php
    //array

    // $var=['milan', 'don'];
    // echo $var[0];
    // $people=[
    //     'milan'=>23
    // ];

    $user=[
        [
            'username'=>'milan',
            'email'=>'milan@gmail.com',
            'likes'=>['milan','messi']
        ],
        [
            'username'=>'arko',
            'email'=>'arko@gmail.com',
            'likes'=>['cat','dog']
        ],
    ];
    //use foreach loop here

    foreach($user as $use){
        echo $use['email'];
        foreach($use['likes'] as $like){
            echo $like;
        }
    }

    // //modification of array
    // $user[1]['likes'][0]='sugur';   
    // echo $user[1]['likes'][0];
    

    //switch 
    // $weather='cloudy';
    // $color='null';

    // switch(true){
    //     case $weather=='sunny';
    //     $color='blue';
    //     break;

    //     case $weather=='cloudy';
    //     $color='grey';
    //     break;
    // }
    // echo $color;

    //break and continue
    // $users=[
    //     ['username'=>'milan'],
    //     ['username'=>'suraj'],
    //     ['username'=>'anup'],
    //     ['username'=>'gasi'],
    //     ['username'=>'sujan']
    // ];
    // $toSkip='anup';
    // foreach($users as $user){
    //     if($user['username']===$toSkip){
    //         // break;  //breaks the loop when it comes to anup and prints only above username
    //         continue;  // prints milan and suraj, when comes to anup doesn't print anup and continues the loop and prints remaining names gasi and sujan
    //     }
    //     echo $user['username'];
    // }
?>