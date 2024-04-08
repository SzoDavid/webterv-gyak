# Fájlkezelés

- `fopen($path, $mode)`
  - `"r"`: csak olvasás
  - `"w"`: csak írás (létrehoz, vagy felülír)
  - `"a"`: append
  - `"x"`: szigorúan létrehoz
  - `"r+"`, `"w+"`, `"a+"`, `"x+"`: olvasás és írás
- `fclose($file_pointer)`
- `fgetc($file_pointer)`: karakter beolvasása, vagy `FALSE`
- `fgets($file_pointer)`: sor beolvasása, vagy `FALSE`
- `filesize($path)`: méret bájtokban
- `fread($file_pointer, $length)`: max `$length` db bájtot olvas be
- `fwrite($file_pointer, $text)`
- `file_get_contents($path)`: stringbe az egész
- `file($path)`: tömbbe az egész
- `file_put_contents($path, $data)`

# Szerializálás

- `json_encode()`
- `json_decode()`

# Jelszavak hashelése

- `password_hash($jelszo, PASSWORD_DEFAULT)`
- `password_verify("Macska123", $hashelt_jelszo)`

# Munkamenet

- `session_start()`
- `session_id()`
- `$_SESSION["username"] = "guest"`
- `session_unset(); session_destroy();`
