<?php
function getProduk(){
    $data = array([
        'itemId' => '12341822',
        'itemName' => 'desk',
        'price' => 700000,
         'ratings' => array([
            ['rater' => 'akmal', 'score'=> 4],
            ['rater' => 'andi', 'score' => 5],
         ]),
         'freeShipping'=> 'true',
          'color' => 'brown,black',
    ]);

    return json_encode($data);
}
 $hasil = getProduk();
 echo $hasil;