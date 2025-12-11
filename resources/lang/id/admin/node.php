<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'FQDN atau alamat IP yang diberikan tidak dapat diselesaikan ke alamat IP yang valid.',
        'fqdn_required_for_ssl' => 'Nama domain yang memenuhi syarat yang diselesaikan ke alamat IP publik diperlukan untuk menggunakan SSL untuk node ini.',
    ],
    'notices' => [
        'allocations_added' => 'Alokasi telah berhasil ditambahkan ke node ini.',
        'node_deleted' => 'Node telah berhasil dihapus dari panel.',
        'location_required' => 'Anda harus memiliki setidaknya satu lokasi yang dikonfigurasi sebelum Anda dapat menambahkan node ke panel ini.',
        'node_created' => 'Berhasil membuat node baru. Anda dapat mengonfigurasi daemon pada mesin ini secara otomatis dengan mengunjungi tab \'Konfigurasi\'. <strong>Sebelum Anda dapat menambahkan server apa pun, Anda harus terlebih dahulu mengalokasikan setidaknya satu alamat IP dan port.</strong>',
        'node_updated' => 'Informasi node telah diperbarui. Jika pengaturan daemon diubah, Anda perlu me-reboot untuk perubahan tersebut diterapkan.',
        'unallocated_deleted' => 'Menghapus semua port yang tidak dialokasikan untuk <code>:ip</code>.',
    ],
];

