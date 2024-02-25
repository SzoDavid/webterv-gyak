# HTML5

Régi:

- `<div>`
- `<span>`

Új:

- `<header>...</header>`
- `<footer>...</footer>`
- `<nav>...</nav>`
- `<aside>...</aside>`
- `<main>...</main>`
- `<section>...</section>`
- `<article>...</article>`

## DOM fa

- szülő-gyerek viszony
- testvér -> szülők egyeznek

--- 

# CSS alapok II.

## Szelektorok

Basic:

- elem
- class `.`
- id `#`
- univerzális `*`

Extra:

- csoportosítás (vesszővel felsorolva)
- `E1 E2`: `E2`, amely egy `E1`-ben található
- `E1 > E2`: `E2`, amelynek szülője `E1` (közvetlen)
- `E1 ~ E2`: `E2`, amely `E1` testvére és `E1` után következik
- `E1 + E2`: `E2`, amely `E1` testvére és közvetlenül `E1` után következik
- `E1:first-child`: `E1`, ami a szülőjének legelső gyereke
- `E1:nth-child(n)`: `E1`, ami a szülőjének `n`-edik gyereke
  - `odd` 
  - `even`
- `E1:last-child`: `E1`, ami a szülőjének az utolsó gyereke
- `E1:first-of-type`: `E1`, ami `E1` típusú testvérei közül a legelső
- `E1:nth-of-type(n)`: `E1`, ami `E1` típusú testvérei közül az `n`-edik
- `E1:last-of-type`: `E1`, ami `E1` típusú testvérei közül az utolsó
- `E1[attr]`: `E1`, amely rendelkezik az `attr`-rel
- `E1[attr="val"]`: `E1`, amelynek `attr` értéke `val`
- `:link`: még nem kerestük fel
- `:visited`: már felkerestük
- `:hover`
- `:active`: amikor rákattintunk

## CSS formázások

- `text-decoration`
  - Dekoráció
    - `underline`
    - `overline`
    - `line-through`
    - `none`
    - `initial`: alapértelmezett érték
  - Stílus (opcionális)
    - `solid`
    - `dashed`
    - `dotted`
    - `wavy`
  - Vonal színe (opcionális)

### Listák

- `list-style-type`
  - Rendezetlen
    - `disc`
    - `circle`
    - `square`
    - `none`
  - Rendezett
    - `decimal`
    - `lower-roman`
    - `upper-roman`
    - `lower-alpha`
    - `upper-alpha`
    - `none`
- `list-style-image`
- `list-style-position`
  - `inside`: a margin és a padding vonatkozik a listajelre is
  - `outside`: a margin és a padding nem vonatkozik a listajelre

### Táblázatok

- `caption-side: bottom`
- `vertical-align: middle`: függőleges
- `text-align: center`: vízszintesen

 ## Helyzetmegadás

 - `position`
  - `static`: default
  - `relative`: defaulthoz képest elmozdítva
  - `absolute`: a legközelebbi nem static ős belső széléhez képest
  - `fixed`: görgetéskor helyén marad

- `top`
- `bottom`
- `left`
- `right`

- `z-index`

- `float`: a tartalom a másik irányból körbefutja
  - `left`
  - `right`
  - `none`

