<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Anda cuba memadam peruntukan lalai untuk pelayan ini tetapi tiada peruntukan sandaran yang boleh digunakan.',
        'marked_as_failed' => 'Pelayan ini ditandakan sebagai gagal dalam pemasangan sebelumnya. Status semasa tidak boleh ditukar dalam keadaan ini.',
        'bad_variable' => 'Terdapat ralat pengesahan dengan pembolehubah :name.',
        'daemon_exception' => 'Terdapat pengecualian semasa cuba berkomunikasi dengan daemon yang menghasilkan kod respons HTTP/:code. Pengecualian ini telah direkodkan. (request id: :request_id)',
        'default_allocation_not_found' => 'Peruntukan lalai yang diminta tidak ditemui dalam peruntukan pelayan ini.',
    ],
    'alerts' => [
        'startup_changed' => 'Konfigurasi permulaan untuk pelayan ini telah dikemaskini. Jika nest atau egg pelayan ini diubah, pemasangan semula akan berlaku sekarang.',
        'server_deleted' => 'Pelayan telah berjaya dipadam dari sistem.',
        'server_created' => 'Pelayan berjaya dicipta pada panel. Sila beri daemon beberapa minit untuk memasang pelayan ini sepenuhnya.',
        'build_updated' => 'Butiran binaan untuk pelayan ini telah dikemaskini. Sesetengah perubahan mungkin memerlukan permulaan semula untuk digunakan.',
        'suspension_toggled' => 'Status penggantungan pelayan telah ditukar kepada :status.',
        'rebuild_on_boot' => 'Pelayan ini telah ditandakan sebagai memerlukan pembinaan semula Docker Container. Ini akan berlaku apabila pelayan dimulakan seterusnya.',
        'install_toggled' => 'Status pemasangan untuk pelayan ini telah ditukar.',
        'server_reinstalled' => 'Pelayan ini telah diaturkan untuk pemasangan semula yang bermula sekarang.',
        'details_updated' => 'Butiran pelayan telah berjaya dikemaskini.',
        'docker_image_updated' => 'Berjaya menukar imej Docker lalai yang digunakan untuk pelayan ini. Permulaan semula diperlukan untuk menggunakan perubahan ini.',
        'node_required' => 'Anda mesti mempunyai sekurang-kurangnya satu nod yang dikonfigurasi sebelum anda boleh menambah pelayan ke panel ini.',
        'transfer_nodes_required' => 'Anda mesti mempunyai sekurang-kurangnya dua nod yang dikonfigurasi sebelum anda boleh memindahkan pelayan.',
        'transfer_started' => 'Pemindahan pelayan telah dimulakan.',
        'transfer_not_viable' => 'Nod yang anda pilih tidak mempunyai ruang cakera atau memori yang diperlukan yang tersedia untuk menampung pelayan ini.',
    ],
];

