# HTML++

## Multimédia

- `<audio>...</audio>`
    - `controls`: vezérlőgombokhoz
    - `<source>`: több alternatív hangállomány megadása, azt játsza le amelyiket felismeri a böngésző
        - `src`
        - `type`: `audio/mpeg`, `audio/ogg` vagy `audio/wav`
    - A tagbe írt szöveg akkor jelenik meg ha a böngésző nem támogatja az audiot
- `<video>...</video>`
    - `controls`: vezérlőgombokhoz
    - `width`, `height`
    - `<source>`: több alternatív videóállomány megadása, azt játsza le amelyiket felismeri a böngésző
        - `src`
        - `type`: `video/mp4`, `video/ogg` vagy `video/webm`

```html
<iframe width="420" height="315" src="https://www.youtube.com/embed/Gwc9RUeXYIQ"></iframe> 
```

# CSS++

- `border-radius`: bal felső, jobb felső, jobb alsó és bal alsó sarkok sugara. Nem megadott paraméter esetén a szemközti saroktól öröklődik TODO ezt rövidíteni

## Árnyékok 

- `text-shadow`: vízszintes-, függőleges eltolás, elmosódás mértéke, szín
- `box-shadow`: vízszintes-, függőleges eltolás, elmosódás mértéke, kiterjedés, szín

## Pseudo-elemek

- `::before`
- `::after`
- `::selection`
- `::first-letter`
- `::first-line`

## Transzformálás

- `translate(x, y)` 
    - `x`: Vízszintes
    - `y`: Függőleges
- `rotate(ndeg)`
- `scale(w, h)`
    - `scaleX(n)`
    - `scaleY(n)`
- `skew(xdeg, ydeg)`
    - `skewX(ndeg)`
    - `skewY(ndeg)`
- `matrix(scaleX, skewY, skewX, scaleY, translateX, translateY)`
- 3D-s forgatás:
    - `rotateX(ndeg)`
    - `rotateY(ndeg)`
    - `rotateZ(ndeg)`

## Áttünések

- `transition`: hovereknél vagy hasonlóknál smoothabb legyen, több is megadható vesszővel elválasztva
    - melyik tulajdonság (`all` - mind)
    - áttűnés ideje
    - sebesség függvénye
        - `ease`: harang
        - `linear`
        - `ease-in`: gyorsuló
        - `ease-out`: lassuló
        - `ease-in-out`

## Animációk

```css
@keyframes animacio_neve {
  from { /* stílus, ami az animáció kezdetén áll fenn */ }
  to { /* stílus, ami az animáció befejezése után áll fenn */ }
}

@keyframes animacio_neve {
  0% { /* stílus, ami az animáció kezdetén áll fenn */ }
  50% { /* stílus, ami akkor áll fenn, ha az animáció 50%-ban végrehajtódott */ }
  100% { /* stílus, ami akkor áll fenn, ha az animáció 100%-ban végrehajtódott */ }
}
```

- Elemhez hozzáadás:
    - `animation-name`
    - `animation-duration`
    - `animation-timing-function`: `ease`, `linear`, `ease-in`, `ease-out`, `ease-in-out`
    - `animation-delay`: kezdet előtti késleltetés
    - `animation-iteration-count`: szám vagy `infinite`
    - `animation-direction`
        - `normal`
        - `reverse`
        - `alternate`
    - `animation-fill-mode`: amikor az animáció éppen nem fut (pl. ha az animáció már befejeződött)
        - `forwards`: az animált elem a legutolsó képkocka stílusát tartja meg
        - `backwards`: az animált elem a legelső képkocka stílusát tartja meg
    - egyben: `animation: [animation-name] [animation-duration] [animation-timing-function] [animation-delay] [animation-iteration-count] [animation-direction] [animation-fill-mode]`

## Média query-k


