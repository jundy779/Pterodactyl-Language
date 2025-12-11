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
        'fqdn_not_resolvable' => 'FQDN atau alamat IP yang diberikan tidak dapat diselesaikan ke alamat IP yang sah.',
        'fqdn_required_for_ssl' => 'Nama domain yang memenuhi syarat yang diselesaikan ke alamat IP awam diperlukan untuk menggunakan SSL untuk nod ini.',
    ],
    'notices' => [
        'allocations_added' => 'Peruntukan telah berjaya ditambah ke nod ini.',
        'node_deleted' => 'Nod telah berjaya dipadam dari panel.',
        'location_required' => 'Anda mesti mempunyai sekurang-kurangnya satu lokasi yang dikonfigurasi sebelum anda boleh menambah nod ke panel ini.',
        'node_created' => 'Berjaya mencipta nod baharu. Anda boleh mengkonfigurasi daemon pada mesin ini secara automatik dengan melawat tab \'Konfigurasi\'. <strong>Sebelum anda boleh menambah sebarang pelayan, anda mesti terlebih dahulu memperuntukkan sekurang-kurangnya satu alamat IP dan port.</strong>',
        'node_updated' => 'Maklumat nod telah dikemaskini. Jika sebarang tetapan daemon diubah, anda perlu memulakan semula untuk perubahan tersebut digunakan.',
        'unallocated_deleted' => 'Memadam semua port yang tidak diperuntukkan untuk <code>:ip</code>.',
    ],
];

