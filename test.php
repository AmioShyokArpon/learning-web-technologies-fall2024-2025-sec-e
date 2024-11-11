<?php

    //echo "Hello PHP". " TEst";

//    print('Hello PHP');

    // $id = 12;
    // $name = "alamin";
    // $cgpa = 3.5;
    // $status = true;
    $len=9;
    $wid=6;
    $amount=1000;
    $vat=0.15;
    $num=5;
    $bignum = ['1st'=>7, '2nd'=>10, '3rd'=>11];

    echo "Area : ".$area = ($len*$wid)."<br>";
    echo "Perimeter : ".$perimeter = 2*($len+$wid)."<br>";

    echo "Total Vat Comes to : ".$tvat = $amount*$vat."<br>";

    function OorE($num){

    if($num % 2==0){

            return"EVEN";
        }
        else{
            return"ODD";
        }


    }

    $checkif = OorE($num);
    echo "The Number"." ".$num." "."Is"." ".$checkif."<br>";

    if($bignum["1st"]>$bignum["2nd"] && $bignum["1st"]>$bignum["3rd"]){

        echo $bignum["1st"]."  Is The Biggest Number"."<br>";
    }

    elseif($bignum["2nd"]>$bignum["1st"] && $bignum["2nd"]>$bignum["3rd"]){

        echo $bignum["2nd"]."  Is The Biggest Number"."<br>";
    }

    elseif($bignum["3rd"]>$bignum["1st"] && $bignum["3rd"]>$bignum["2nd"]){

    echo $bignum["3rd"]."  Is The Biggest Number"."<br>";
    }









    // $std = array('alamin', 1, 3.5, 'alaminn@aiub.edu');
    // $std[0];
    // $std = ['alamin', 1, 3.5, 'alaminn@aiub.edu'];
    // $std[1];
    // $stds =  [ 
    //             ['alamin', 1, 3.5, 'alaminn@aiub.edu'],
    //             ['alamin', 1, 3.5, 'alaminn@aiub.edu'],
    //             ['alamin', 1, 3.5, 'alaminn@aiub.edu']
    //         ];
    // $stds[1][3];

    // $std = ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'];
    // $std['email'];

    // $stds =  [
    //             ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //             ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //             ['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu']
    //         ];
    
    // $stds[1]['email'];

    // $stds =  [
    //     's1'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //     's2'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu'],
    //     's3'=>['name'=>'alamin', 'id'=>1, 'cgpa'=>3.5, 'email'=>'alaminn@aiub.edu']
    // ];

    // $stds['s2']['email'];

    // function abc($a, $b){
    //     return $a+$b;
    // }

    // abc(1,5);

    // function abc($a=0, $b=1){
    //     return $a+$b;
    // }

    // abc();

    // if(){

    // }else{

    // }

    //for($i=0; $i<10; $i++){

        //print("My name is alamin\r\n");
    //}

?>