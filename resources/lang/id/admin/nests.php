<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Nest baru, :name, telah berhasil dibuat.',
        'deleted' => 'Berhasil menghapus nest yang diminta dari Panel.',
        'updated' => 'Berhasil memperbarui opsi konfigurasi nest.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Berhasil mengimpor Egg ini dan variabel yang terkait.',
            'updated_via_import' => 'Egg ini telah diperbarui menggunakan file yang diberikan.',
            'deleted' => 'Berhasil menghapus egg yang diminta dari Panel.',
            'updated' => 'Konfigurasi Egg telah berhasil diperbarui.',
            'script_updated' => 'Skrip instalasi Egg telah diperbarui dan akan berjalan setiap kali server diinstal.',
            'egg_created' => 'Egg baru telah berhasil dibuat. Anda perlu me-restart daemon yang berjalan untuk menerapkan egg baru ini.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Variabel ":variable" telah dihapus dan tidak akan lagi tersedia untuk server setelah di-rebuild.',
            'variable_updated' => 'Variabel ":variable" telah diperbarui. Anda perlu me-rebuild server yang menggunakan variabel ini untuk menerapkan perubahan.',
            'variable_created' => 'Variabel baru telah berhasil dibuat dan ditugaskan ke egg ini.',
        ],
    ],
];

