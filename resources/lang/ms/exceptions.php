<?php

return [
    'daemon_connection_failed' => 'Terdapat pengecualian semasa cuba berkomunikasi dengan daemon yang menghasilkan kod respons HTTP/:code. Pengecualian ini telah direkodkan.',
    'node' => [
        'servers_attached' => 'Sebuah nod mesti tidak mempunyai pelayan yang disambungkan untuk boleh dipadam.',
        'daemon_off_config_updated' => 'Konfigurasi daemon <strong>telah dikemaskini</strong>, namun terdapat ralat semasa cuba mengemaskini fail konfigurasi pada Daemon secara automatik. Anda perlu mengemaskini fail konfigurasi (config.yml) untuk daemon secara manual untuk menggunakan perubahan ini.',
    ],
    'allocations' => [
        'server_using' => 'Sebuah pelayan sedang ditugaskan ke peruntukan ini. Peruntukan hanya boleh dipadam jika tiada pelayan yang sedang ditugaskan.',
        'too_many_ports' => 'Menambah lebih daripada 1000 port dalam satu julat sekaligus tidak disokong.',
        'invalid_mapping' => 'Pemetaan yang diberikan untuk :port tidak sah dan tidak dapat diproses.',
        'cidr_out_of_range' => 'Notasi CIDR hanya membenarkan topeng antara /25 dan /32.',
        'port_out_of_range' => 'Port dalam peruntukan mestilah lebih besar daripada 1024 dan kurang daripada atau sama dengan 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Nest dengan pelayan aktif yang disambungkan tidak boleh dipadam dari Panel.',
        'egg' => [
            'delete_has_servers' => 'Egg dengan pelayan aktif yang disambungkan tidak boleh dipadam dari Panel.',
            'invalid_copy_id' => 'Egg yang dipilih untuk menyalin skrip tidak wujud, atau sedang menyalin skrip itu sendiri.',
            'must_be_child' => 'Arahan "Salin Tetapan Dari" untuk Egg ini mesti menjadi pilihan child untuk Nest yang dipilih.',
            'has_children' => 'Egg ini adalah parent untuk satu atau lebih Egg lain. Sila padam Egg tersebut sebelum memadam Egg ini.',
        ],
        'variables' => [
            'env_not_unique' => 'Pembolehubah persekitaran :name mestilah unik untuk Egg ini.',
            'reserved_name' => 'Pembolehubah persekitaran :name dilindungi dan tidak boleh ditugaskan kepada pembolehubah.',
            'bad_validation_rule' => 'Peraturan pengesahan ":rule" bukan peraturan yang sah untuk aplikasi ini.',
        ],
        'importer' => [
            'json_error' => 'Terdapat ralat semasa cuba menguraikan fail JSON: :error.',
            'file_error' => 'Fail JSON yang diberikan tidak sah.',
            'invalid_json_provided' => 'Fail JSON yang diberikan tidak dalam format yang boleh dikenali.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Mengedit akaun subpengguna anda sendiri tidak dibenarkan.',
        'user_is_owner' => 'Anda tidak boleh menambah pemilik pelayan sebagai subpengguna untuk pelayan ini.',
        'subuser_exists' => 'Pengguna dengan alamat e-mel tersebut sudah ditugaskan sebagai subpengguna untuk pelayan ini.',
    ],
    'databases' => [
        'delete_has_databases' => 'Tidak boleh memadam pelayan hos pangkalan data yang mempunyai pangkalan data aktif yang disambungkan.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Masa selang maksimum untuk tugas berantai ialah 15 minit.',
    ],
    'locations' => [
        'has_nodes' => 'Tidak boleh memadam lokasi yang mempunyai nod aktif yang disambungkan.',
    ],
    'users' => [
        'node_revocation_failed' => 'Gagal membatalkan kunci pada <a href=":link">Nod #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Tiada nod yang memenuhi keperluan yang ditentukan untuk penyebaran automatik yang boleh ditemui.',
        'no_viable_allocations' => 'Tiada peruntukan yang memenuhi keperluan untuk penyebaran automatik yang ditemui.',
    ],
    'api' => [
        'resource_not_found' => 'Sumber yang diminta tidak wujud pada pelayan ini.',
    ],
];

