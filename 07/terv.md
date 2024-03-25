# PHP függvények

```php
<?php

function fuggveny_neve($param1, $param2, ...) {
  // függvénytörzs
}

fuggveny_neve(/* paraméterek átadása */);
```

- definiálás előtt is meghívhatjuk
- alapesetben nem lehet bennük globális változókat elérni

```php 
<?php

$globalis_valtozo = 'macska';

function macska_simogato() {
  static $simogatasok_szama = 0;
  global $globalis_valtozo;
  $GLOBALS['globalis_valotoz'];
  $globalis_valtozo = 'megsimogatott macska';
  
  $simogatasok_szama++;
  echo "Eddig $simogatasok_szama macskát simogattam meg<br>";
}

macska_simogato();

echo "Globalis valtozo erteke: '$globalis_valtozo'<br>";
```

- paraméter alapból érték szerint `&` használatával referencia szerint
- visszatérés `return`-nel
- referencia szerinti visszatéréskor függvény neve elé `&`

```php
<?php

function &fuggveny_neve() {}
```

- overloading nincs: minden függvény csak egyszer meghívható
- Default paraméter

```php
<?php

function fuggveny_neve($macska='meow') {}
```

- type hint

```php 
<?php

function fuggveny(int $a, string $b): array {}
```

- Változó hosszúságú paraméterlista

```php 
<?php
  function atlag(int ...$szamok) : float {    // változó hosszúságú paraméterlista
    $osszeg = 0;
    foreach ($szamok as $szam) {              // paraméterek bejárása
      $osszeg += $szam;
    }
    return $osszeg / count($szamok);
  }

  $a = atlag(10, 20, 30);                       // 20
  $b = atlag(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);    // 5.5
```

# Űrlap feldolgozás

- `<form>` tag `action` paramétere a php file ami feldolgozza 
- `$_GET`: `<form method="GET">`
- `$_POST`: `<form method="POST">` Jelszavakat pls így
- `$_GET['name']`/`$_POST['name']`: ahol a `name` az inputnak megadott `name`
- Ellenőrzés
  - `isset($val)`: ha nem null
  - `empty($val)`: ha üres
- Többértékűek egy listába kerülnek.
