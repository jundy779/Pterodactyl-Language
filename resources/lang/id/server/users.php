<?php

return [
    'permissions' => [
        'websocket_*' => 'Memungkinkan akses ke websocket untuk server ini.',
        'control_console' => 'Memungkinkan pengguna mengirim data ke konsol server.',
        'control_start' => 'Memungkinkan pengguna memulai instance server.',
        'control_stop' => 'Memungkinkan pengguna menghentikan instance server.',
        'control_restart' => 'Memungkinkan pengguna me-restart instance server.',
        'control_kill' => 'Memungkinkan pengguna mematikan instance server.',
        'user_create' => 'Memungkinkan pengguna membuat akun pengguna baru untuk server.',
        'user_read' => 'Memungkinkan pengguna melihat pengguna yang terkait dengan server ini.',
        'user_update' => 'Memungkinkan pengguna memodifikasi pengguna lain yang terkait dengan server ini.',
        'user_delete' => 'Memungkinkan pengguna menghapus pengguna lain yang terkait dengan server ini.',
        'file_create' => 'Memungkinkan pengguna membuat file dan direktori baru.',
        'file_read' => 'Memungkinkan pengguna melihat file dan folder yang terkait dengan instance server ini, serta melihat isinya.',
        'file_update' => 'Memungkinkan pengguna memperbarui file dan folder yang terkait dengan server.',
        'file_delete' => 'Memungkinkan pengguna menghapus file dan direktori.',
        'file_archive' => 'Memungkinkan pengguna membuat arsip file dan mengekstrak arsip yang ada.',
        'file_sftp' => 'Memungkinkan pengguna melakukan aksi file di atas menggunakan klien SFTP.',
        'allocation_read' => 'Memungkinkan akses ke halaman manajemen alokasi server.',
        'allocation_update' => 'Memungkinkan pengguna membuat modifikasi pada alokasi server.',
        'database_create' => 'Memungkinkan pengguna membuat database baru untuk server.',
        'database_read' => 'Memungkinkan pengguna melihat database server.',
        'database_update' => 'Memungkinkan pengguna membuat modifikasi pada database. Jika pengguna tidak memiliki izin "Lihat Kata Sandi" juga, mereka tidak akan dapat memodifikasi kata sandi.',
        'database_delete' => 'Memungkinkan pengguna menghapus instance database.',
        'database_view_password' => 'Memungkinkan pengguna melihat kata sandi database di sistem.',
        'schedule_create' => 'Memungkinkan pengguna membuat jadwal baru untuk server.',
        'schedule_read' => 'Memungkinkan pengguna melihat jadwal untuk server.',
        'schedule_update' => 'Memungkinkan pengguna membuat modifikasi pada jadwal server yang ada.',
        'schedule_delete' => 'Memungkinkan pengguna menghapus jadwal untuk server.',
    ],
];

