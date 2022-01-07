<?php
//Input
$lengte_kamer = readline("Hoe lang is de kamer in centimeter?");
$breedte_kamer = readline("Hoe breed is de kamer in centimeter?");
$tegel_x = readline("Hoe lang is de tegel in centimeter?");
$tegel_y = readline("Hoe breed is de tegel in centimeter?");

//Berekening
$aantaltegels_breedte = ceil($breedte_kamer/$tegel_y); // 500/30 = 16.6 (ceil naar boven afronden no matter what!)
$aantaltegels_lengte = ceil($lengte_kamer/ $tegel_x);// 700/30 = 23,33
$aantaltegels= $aantaltegels_lengte *$aantaltegels_breedte; // 24*17 = 408

//Output
$tegel_y /=100;
$tegel_x= $tegel_x/100;
$lengte_kamer/=100;
$breedte_kamer/=100;
Echo "Je moet $aantaltegels tegels van $tegel_y x $tegel_x meter kopen voor een kamer van $lengte_kamer op $breedte_kamer meter.";
