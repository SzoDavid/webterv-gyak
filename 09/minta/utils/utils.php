<?php
    function load_data(string $path): array {
        if (!file_exists($path)) return [];

        $raw = file_get_contents($path);

        return json_decode($raw, true);
    }

    function save_data(string $path, array $newData): void {
        $data = load_data($path);
        $data[] = $newData;

        file_put_contents($path, json_encode($data));
    }

    function file_upload($file): string|false {
        // Megjegyzés: Mivel ennek  függvénynek a $_FILE['pic'] értékét adjuk át, a kép egyes adatait úgy érhetjük el,
        // hogy például $file['tmp_name']

        //Nézzük meg, hogy a fájl feltöltése sikeres volt-e. Ha nem térjünk vissza false-al

        $allowed_extensions = ["jpg", "jpeg", "png"];
        $filename = pathinfo($file['name'], PATHINFO_FILENAME);

        // Az $extension értéke legyen a file kiterjesztése kisbetűsítve
        $extension = 'png';

        if (!in_array($extension, $allowed_extensions)) {
            return false;
        }

        $path = 'img/upload/' . $filename . date("YmdHis") . '.' . $extension;

        // Ellenőrizzük le, hogy a $path-ban tárolt cél útvonal létezik-e már, ha igen a függvény térjen vissza
        // hamissal, ellenkező esetben a feltöltött fájlt mozgassuk oda

        return $path;
    }
