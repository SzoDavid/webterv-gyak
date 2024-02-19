# HTML alapok II.

bodyról lesz szó

## Formázások
- `<h1>...</h1>`, `<h2>...</h2>`, ..., `<h6>...</h6>` címsorok
- `<p>..</p>` bekezdés
- `<br>`
- `<hr>`
- `<pre>...</pre>`
- `<em>...</em>`
- `<strong>...</strong>`
- `<sub>...</sub>`
- `<sup>...</sup>`
- `<q>...</q>`
- `<blockquote>...</blockquote>`
- `<code>...</code>`
- `<mark>...</mark>`

## Iframe

- `<iframe>...</iframe>`
    - `src`
    - `width`
    - `height`

## Listák

- `<ul>...</ul>` rendezetlen
    - `<li>...</li>`
- `<ol>...</ol>` rendezett
    - `<li>...</li>`
    - `reversed`
    - `start`
    - `type`
        - `1` arab
        - `i` kis római
        - `I` nagy római
        - `a` kis betű
        - `A` nagy betű

Lehet listában lista

## Táblázatok

- `<table>...</table>`
    - `<tr>...</tr>`
    - `<th>...</th>` -> id
    - `<td>...</td>` -> `headers`
    - `<caption>...</caption>` leírás, rögtön `<table>` alá
    - `<colgroup>...</colgroup>` ez alá
        - `<col style="" span="N">`
    - `rowspan`
    - `colspan`
    - opcionális:
        - `<thead>...</thead>`
        - `<tbody>...</tbody>`
        - `<tfoot>...</tfoot>`

# CSS alapok I.

- `/* */` komment
- inline
- internal
- external
    - `<link rel="stylesheet" href="main.css"/>`

## Szelektorok

- elem
- class `.`
- id `#`
- univerzális `*`

## Szövegek

- `font-family`
- `font-size`
- `font-weight`
    - `normal`
    - `bold`
    - `bolder`
    - `lighter` 
    - 100 - 900 közötti szám
- `font-style: italic`
- `color` betű
- `text-align`
    - `left`
    - `right`
    - `center`
    - `justify` 
- `text-transform`
    - `uppercase`
    - `lowercase`
    - `capitalize`
    - `none`

## Szegélyek

- `border-width`  
    - `thin`
    - `medium`
    - `thick`
    - px
- `border-style`
    - `solid`
    - `dashed`
    - `dotted`
    - `double`
    - `groove`
    - `ridge`
    - `outset`
    - `inset`
    - `none`
    - `hidden`
- `border-color`

## Térközök

- `margin`
    - `margin-left: auto` + `margin-right: auto` = közép
- `padding`

## Háttér

- `background-color`
    - `transparent`
- `background-image`
    - `url()`
- `background-repeat`
    - `repeat`
    - `repeat-x`
    - `repeat-y`
    - `no-repeat`
    


