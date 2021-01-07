<?php
$arr = array("haskijs","taksis","čiuaua","aitu suns","bīgls","bokseris","briārs","čiuaua", "dalmācietis", "dobermanis");
$numArr = array(1,2,3,4,5,6,7,8,9);
print_r($arr);
/* Funkcija, kas izmanto array_unique() funkciju, izvada jaunu masīvu, kurā nav duplikātu. 
Lai izmantotu funkciju pie koda beigām pievieno darbību array_unique($masīvsKoIzmanto);
*/
function remDuplicates($arr){
    $arru = array_unique($arr); //iznem no masiva duplikatus
    print_r($arru);
}
remDuplicates($arr);
/* Funkcija, kas izmanto array_search funkciju, izvada true vai false vērtību, false, ja objekts neatrodas masīvā,
un izvada ievietotās vērtības atrašanās vietu masīvā.
Lai izmantotu funkciju pie koda beigām pievieno darbību arrSearch($vērtībaKuruVēlasSameklēt, $masīvsKoIzmanto);
*/
function arrSearch($val, $arr){
    $se = array_search($val, $arr); //Ja objekts eksiste masivā, tad izvada ta poziciju taja, ja nav izdod atbildi false
    echo $se, "\n";
        if($se == false){
            echo "Search false \n";
        }
}

/* Funkcija, kas izmanto in_array funkciju, izvada true vai false vērtību, un pārbauda,
vai funkcijā ievietotā vērtība $val eksistē paša funkcijā. Šī funkcija neizdod vērtības atrašanās vietu masīvā.
Lai izmantotu funkciju pie koda beigām pievieno darbību inArray($masīvsKoIzmanto);
*/
function inArray($val, $arr){
    $b = in_array($val, $arr); //Parbauda vai elements ir masivs, izdod atbildi true or false, neizdod objekta atrasanas vietu masiva
        if($b == true){
            echo "in_array True";
        }else{
            echo "in_ array False";
    }
}

/* Funkcija, kas izmanto sort funkciju, izvada true or false vertibu, vai funkcija vispar nostrādāja, 
bet šī funkcija izmain doto masīvu, un sakārto to pēc norādītās secības. 
Lai izmantotu funkciju pie koda beigām pievieno darbību sorting($masīvsKoIzmanto);
*/
function sorting($arr){ //sorting funkcija izdod true or valse atbildi, bet izmaina dota masiva kartibu pec noraditajiem parametriem.
    $s = sort($arr);
    print_r($arr); //tākā sort izdod true or false, mums jaizvada dotais masīvs
    
}

/* Funkcija, kas izmanto array_values funkciju, izvada visas masīva vērtības, atšķirībā no foreach funkcijas, 
ar šīs funkcijas izdotajiem datiem, tos nevar manipulēt atsevišķi.
Lai izmantotu funkciju pie koda beigām pievieno darbību arrValues($masīvsKoIzmanto);
*/
function arrValues($arr){ //array_values izdod ara visas masiva vertibas
    $av = array_values($arr);
    print_r($av);
}

/* Funkcija, kas izmanto foreach funkciju, izveido tādu kā for loop, kas $val vietā ievieto pēc kārtas masīva 
katru vērtību, tad ar šo $val var veikt dažādas darbības un manipulēt ar masīvu. Ja veiktās darbiības ir veiktas 
ar string veida ievadi, tās tiek izlaistas un izveidojas kļūda. 
Lai izmantotu funkciju pie koda beigām pievieno darbību fe($masīvsKoIzmanto);
*/
function fe($arr){
    foreach($arr as &$val){ //saja gadijuma funkcija foreach katru masiva elementa vertibu piesaista $val mainigajam un ar to izdara matematiskas darbibas, vai teksta izvadi
        echo $val. "\n"; // šajā gadījumā katra $val vertiba tiek izvadīta 
    }
}

/* Funkcija, kas izmanto foreach funkciju, izveido tādu kā for loop, kas $val vietā ievieto pēc kārtas masīva 
katru vērtību, tomēr atšķirība no iepriekšējā foreach, ar => palīdzību no masīva var arī iegūt vērtības kārtas skaitli $key,
tad ar šīm vērtībām var veikt dažādas darbības un manipulēt ar masīvu tieši tāpat, kā iepriekšējā piemērā.
Lai izmantotu funkciju pie koda beigām pievieno darbību fe1($masīvsKoIzmanto);
*/

function fe1($arr){
    foreach($arr as $key => $val){ //saja gadijuma funkcija foreach katru masiva vertibu UN ATRASANAS VIETU atbilstosi piesaista mainigajiem $val un $key
        echo $key. "=" . $val . "\n"; //šajā gadījumā izveido lasāmu masīvu, bez print_r() funkcijas vajadzības.
    }
}

/* Funkcija, kas izmanto count funkciju, saskaita vērtību skaitu dotajā masīvā
Lai izmantotu funkciju pie koda beigām pievieno darbību countArr($masīvsKoIzmanto);
*/
function countArr($arr){
    $c = count($arr); //Count funkcija izskaita cik daudz vertibu ir masiva
    echo $c;
}

/* Funkcija, kas izmanto array_push funkciju, kas masīva beigās pievieno funkcijā ievietotās vērtības.
Lai izmantotu funkciju pie koda beigām pievieno darbību pushArray($masīvsKoIzmanto, $vētībasKurasPievieno);
*/
function pushArray($arr, ...$args){ 
    $nArr = array_push($arr, ...$args);
    print_r($arr);
}


/*funkcijas rakstīt pēc šīs līnijas. */



?>