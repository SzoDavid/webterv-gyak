# PHP 

[Macska](https://http.cat/)

- Kliens vs Szerver
- Bizalmas adatokat szerveren
- XAMPP
- `[XAMPP telepítési helye]/xampp/htdocs`
- `<link rel="stylesheet" href="style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>"/>`
- Kommentek
  - `//`
  - `#`
  - `/* */`
- Kiíratás 
  - `echo`
  - `print`: lassabb, csak egy paramétere lehet, van visszatérési értéke
  - `print_r()`: tömbök, objektumok
- Kilépés: Paraméterek: hibaüzenet, kilépési kód, a kettő ugyan az xd
  - `exit()`
  - `die()`

## Változók

`$valtozo`
```php
  <?php
    $nev = "Gipsz Jakab";            // egy $nev változó létrehozása és értékadás
    echo "Szia! A nevem $nev. <br>"; // a változó értékének kiíratása
    echo 'Szia! A nevem $nev. <br>'; // ez nem helyettesít be
  ?>
  ```
- Gyenge típusosság
- `define("ELET_ERTELME", 42);`: konstans
- Mágikus konstansok
  - `__LINE__`: a fájl aktuális sorának száma
  - `__FILE__`: a fájl teljes elérési útvonala és neve
  - `__FUNCTION__`: a függvény neve
  - `__CLASS__`: az osztály neve
  - `__METHOD__`: az osztály metódusának neve
  - `__NAMESPACE__`: a névtér neve 

### Adattípusok

- `BOOL`: (`true`/`TRUE`)/(`false`/`FALSE`)
- `INT`: mindig előjelesek
  - `PHP_INT_MIN`
  - `PHP_INT_MAX`
- `FLOAT`
- `STRING`: `"..."`/`'...'`
  - `.`: összefűzés
  - `strlen($s)`
  - `strtolower($s)`
  - `strtoupper($s)`
  - `substr($s, $start, $length)`
  - `strpos($s, $text)`: $text részstring első előfordulásának kezdőindexét az $s stringben (FALSE ha nem találja)
  - `str_replace($old, $new, $s)`
  - `explode($delim, $s)`: feldarabolja az $s stringet $delim karakterek mentén
- `ARRAY`
  - `$tomb1 = array(10, 20, 30);`
  - `$tomb2 = [10, 20, 30];`\
  - Asszociatív tömbök: `kulcs => érték`
  - `count($t)`: `$t` tömb hossza
  - `sort($t)`: rendezi a `$t` tömb értékeit
  - `in_array($e, $t)`: `$e` szepel-e a `$t` tömbben (érték)
  - `array_key_exists($k, $t)`: `$k` szerepel-e a `$t` tömbben (kulcs)
  - `array_pop($t)`: törli a `$t` tömb utolsó elemét
  - `array_push($t, $a, $b, ...)`: beszúrja az `$a, $b, ...` elemeket a `$t` tömb végére
  - `array_shift($t)`: törli a `$t` tömb első elemét
  - `array_unshift($t, $a, $b, ...)`: beszúrja az `$a, $b, ...` elemekt a `$t` tömb elejére
  - `implode($delim, $t)`: egy stringgé egyesíti a `$t` tömb elemeit, `$delim` karakterek mentén
- `OBJECT`: osztály példánya
- `RESOURCE`: fájlok/adatbázis kapcsolatok
- `NULL`

## Extra operátorok

- `**`: hatvány  
- `===`: nagyon egyenlő

## Vezérlési szerkezetek

### if-elseif-else 
```php 
<?php
  $eletkor = 12;  

  if ($eletkor < 18) {
    echo "Kiskorú vagy. <br/>";
    echo "Még " . (18 - $eletkor) . " év, és nagykorú leszel.";
  } elseif ($eletkor >= 20 && $eletkor <= 29) {
    echo "Huszonéves vagy.";
  } else {
    echo "Nagykorú vagy.";
  }
?>
```

### Egysoros if-else

```php
$eletkor = 12;  

echo  $szam % 2 === 0 ? "Páros. <br/>" : "Páratlan. <br/>";
```

### switch 

```php
<?php
  $erdemjegy = 5; 

  switch ($erdemjegy) {  // az $erdemjegy változó értékét vizsgáljuk
    // különböző eseteket vizsgálunk a változó értékének függvényében
    case 1: echo "Elégtelen"; break;
    case 2: echo "Elégséges"; break;
    case 3: echo "Közepes"; break;
    case 4: echo "Jó"; break;
    case 5: echo "Jeles"; break;
    // ha a fentiek közül egyik esetre sem illeszkedünk, akkor a default ág fut le
    default: echo "Érvénytelen érdemjegy!";
  }
?>
```

### match

```php
  $erdemjegy = 5;
  
  echo match ($erdemjegy) {
    1 => "Elégtelen",
    2 => "Elégséges",
    3 => "Közepes",
    4 => "Jó",
    5 => "Jeles",
    default => "Érvénytelen érdemjegy!",
  } . `<br>`;
```

### while

```php
<?php
  $i = 1;
  while ($i <= 10) {
    echo $i . "<br/>";
    $i++;
  }
?>
```

### do... while

```php 
<?php
  $i = 1;
  do {
    echo $i . "<br/>";
    $i++;
  } while ($i <= 10);
?>
```

### for

```php 
<?php
  for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br/>";
  }
?>
```

### foreach

```php
<?php
   $arak = ["szendvics" => 220, "tea" => 70, "csoki" => 150];
   
   foreach ($arak as $ar) {
     echo $ar . "<br/>";
   }
   
  // HIBÁS MEGOLDÁS: itt egy másolattal dolgozunk, nem az eredeti tömbbel
  foreach ($arak as $ar) {
    $ar = $ar * 0.9;
  }
  print_r($arak); echo "<br/>";

  // HELYES MEGOLDÁS: ha referenciát adunk át, akkor az eredeti tömböt módosítjuk
  foreach ($arak as &$ar) {
    $ar = $ar * 0.9;
  }
  print_r($arak); echo "<br/>";
?>
```