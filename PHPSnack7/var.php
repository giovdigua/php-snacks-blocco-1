<?php
    $students =  [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini',
                'votes' => [
                    10,8,6
                ]
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini',
                'votes' => [
                    5,7,9
                ]
                
            ],
            [
                'name' => 'Michele',
                'lastname' => 'Papagni',
                'votes' => [
                    4,3,10
                ]
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri',
                'votes' => [
                    10,8,10
                ]
            ]
       ];

       function calcualteArrayAverage($arr)
       {
           $sum = array_sum($arr);
           $avg =number_format($sum/count($arr),2);
           return $avg;
       }
?>