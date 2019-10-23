<?php

function beetlesDistribution ($stones, $beetles) {
    $road = [];
    $road[] = $stones;
    for ($i = $beetles; $i > 0; $i--) {
        $stoneEmpty = array_shift($road);
        $stoneEmpty--;
        $rightRoad = floor($stoneEmpty/2);
        $leftRoad = ceil($stoneEmpty/2);
        array_push($road, $leftRoad, $rightRoad);
    }
    
      return "stones quantity = {$stones} <br>
              beetles quntity = {$beetles} <br>
              leftRoad = {$leftRoad} <br>
              rightRoad = {$rightRoad}";
    }
  
    echo beetlesDistribution(8,1); 
    echo beetlesDistribution(8,2); 
    echo beetlesDistribution(8,3); 
    echo beetlesDistribution(11,3); 