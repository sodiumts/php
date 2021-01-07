<?php
//izveido funkciju, kas veic kopīgā dalītāja atrašanu starp diviem skaitļiem
function divDal($dalamais, $dalitajs){
    /* Izmantojot eiklida teorēmu aprēķina kopīgo dalītāju */
    $arr = [];
    while ($dalitajs != 0){
        $atlikums = $dalamais % $dalitajs;// Iegust atlikumu
        $dalamais = $dalitajs; // Dalamo aizvieto ar dalitaju 
        $dalitajs = $atlikums; // Dalitaju aizvieto ar iegūto atlikumu
        //array_push($arr, $dalitajs);
    } // atkārto līdz atlikums paliek par 0 - pēdējā darbība ir notikusi 
    //print_r($arr); // izvada visas atlikuma vērtības kā masīvu
    return $dalamais; // atriež $dalamais kā funkcijas rezultātu
}
//izveido funkciju, kas pados divDal funkcijai katru ievadīto skaitli
function vairDal($skaitli){
    $kopdal = 0; //definē mainīgo
    //izveido for loop, kas izies cauri visiem ievadītā masīva skaitļiem
    //tākā php skaitīšanas sākas no nulles, lai iegūtu piemo masīva elementu i ir jābūt 0 
    for ($i = 0; $i < count($skaitli); $i++){
        $kopDal = divDal($kopDal, $skaitli[$i]);//izmanto i kā virknes skaitļa atrašanās vietu
        //pirmo skaitļu kopīgo dalītāju dala ar nākamo virknes locekli  
    }
    return $kopDal; //pēc loop iziešanas atgriež kopīgā dalītāja vērību
}
//definē masīvu kurā būs pieci random skaitļi 
$randArr = [];
//izveido loop kurš 5 reizes $randArr masīvam pievienos random skaitli
for($i=5; $i>0; $i--){
    array_push($randArr, rand());
}
echo "Ievadītās vērtības: ";
print_r($randArr) ;

echo "Lielākais kopīgais dalītājs: ". vairDal($randArr);
?>