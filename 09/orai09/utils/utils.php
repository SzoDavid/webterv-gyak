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
        if ($file['error'] !== 0) {
            return false;
        }

        $allowed_extensions = ["jpg", "jpeg", "png"];
        $filename = pathinfo($file['name'], PATHINFO_FILENAME);
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($extension, $allowed_extensions)) {
            return false;
        }

        $path = 'img/upload/' . $filename . date("YmdHis") . '.' . $extension;

        if (file_exists($path)) {
            return false;
        }

        move_uploaded_file($file['tmp_name'], $path);
        return $path;
    }
