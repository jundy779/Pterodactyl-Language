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
        'no_new_default_allocation' => 'Anda mencoba menghapus alokasi default untuk server ini tetapi tidak ada alokasi fallback yang dapat digunakan.',
        'marked_as_failed' => 'Server ini ditandai sebagai gagal dalam instalasi sebelumnya. Status saat ini tidak dapat diubah dalam keadaan ini.',
        'bad_variable' => 'Terjadi kesalahan validasi dengan variabel :name.',
        'daemon_exception' => 'Terjadi pengecualian saat mencoba berkomunikasi dengan daemon yang menghasilkan kode respons HTTP/:code. Pengecualian ini telah dicatat. (request id: :request_id)',
        'default_allocation_not_found' => 'Alokasi default yang diminta tidak ditemukan dalam alokasi server ini.',
    ],
    'alerts' => [
        'startup_changed' => 'Konfigurasi startup untuk server ini telah diperbarui. Jika nest atau egg server ini diubah, reinstall akan terjadi sekarang.',
        'server_deleted' => 'Server telah berhasil dihapus dari sistem.',
        'server_created' => 'Server berhasil dibuat di panel. Silakan beri daemon beberapa menit untuk sepenuhnya menginstal server ini.',
        'build_updated' => 'Detail build untuk server ini telah diperbarui. Beberapa perubahan mungkin memerlukan restart untuk diterapkan.',
        'suspension_toggled' => 'Status penangguhan server telah diubah menjadi :status.',
        'rebuild_on_boot' => 'Server ini telah ditandai sebagai memerlukan rebuild Docker Container. Ini akan terjadi saat server dimulai berikutnya.',
        'install_toggled' => 'Status instalasi untuk server ini telah diubah.',
        'server_reinstalled' => 'Server ini telah diantrikan untuk reinstall yang dimulai sekarang.',
        'details_updated' => 'Detail server telah berhasil diperbarui.',
        'docker_image_updated' => 'Berhasil mengubah gambar Docker default yang digunakan untuk server ini. Reboot diperlukan untuk menerapkan perubahan ini.',
        'node_required' => 'Anda harus memiliki setidaknya satu node yang dikonfigurasi sebelum Anda dapat menambahkan server ke panel ini.',
        'transfer_nodes_required' => 'Anda harus memiliki setidaknya dua node yang dikonfigurasi sebelum Anda dapat mentransfer server.',
        'transfer_started' => 'Transfer server telah dimulai.',
        'transfer_not_viable' => 'Node yang Anda pilih tidak memiliki ruang disk atau memori yang diperlukan yang tersedia untuk menampung server ini.',
    ],
];

