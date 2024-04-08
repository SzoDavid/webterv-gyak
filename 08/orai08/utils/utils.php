<?php
    function load_data(string $path): array {
        if (!file_exists($path)) return [];

        $raw = file_get_contents($path);

        return json_decode($raw, true);
    }

    function save_data(string $path, array $user): void {
        $users = load_data($path);
        $users[] = $user;

        file_put_contents($path, json_encode($users));
    }