# Zűrlapok

- `<form>...</form>`
    - `action`: php-ben lesz lényeges, mi feleljen az adatok feldolgozásáért
    - `method` 
        - `GET`
        - `POST`
    - `enctype`
        - `application/x-www-form-urlencoded`: default
        - `multipart/form-data`: file feltöltéskor
    - `autocomplete`
        - `on`/`off`
    - `novalidate`

- `<input>`
    - `name`
    - `size`: szélesség
    - `maxlength`: max beírható karakterek száma
    - `value`: default érték
    - `placeholder`
    - `autocomplete`: mint a formnál
    - `required`
    - `readonly`: bele lehet kattintani meg stb
    - `disabled`: bele se lehet kattintani
    - `type`
        - `text`: rövid szöveg
        - `password`: kicsillagosítja, de nem titkosítja
        - `number`
        - `range`
            - `min`
            - `max`
            - `step`
        - `tel`
        - `email`
        - `url`
        - `color`
        - `date`
            - `min`
            - `max`
        - `time`
        - `datetime-local`
        - `file`
          - `accept`
            - felsorolás, vesszővel
            - `audio/*`
            - `video/*`
            - `image/*`
        - `search`
        - `radio`
            - `name` alaján csoportosítja
            - `checked`
        - `checkbox`
            - `checked`
        - `button`
        - `submit`
        - `reset`
        - `hidden` 

- `<textarea>...</textarea>`
    - `name`
    - `placeholder`
    - `maxlength`
    - `required`
    - `readonly`
    - `disabled`
    - `rows`
    - `cols`

- `<select>...</select>`
    - `name`
    - `required`
    - `disabled`
    - `multiple`
    - `<option>...</option>` 
        - `value`
        - `selected`
        - `disabled`

- `<fieldset>...</fieldset>`: csoportosítás
  - `<legend>...</legend>`: cím

- `<label>...</label>`
    - az elemet közé tesszük
    - `for`-ral megadjuk az elem id-ját

## CSS

- `<input type="text">` = `input[type="text"]`
- `:reqired` <> `:optional`
- `:focus`
- `:checked`: radio, checkbox, option
- `:disabled` <> `:enabled`