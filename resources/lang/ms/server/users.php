<?php

return [
    'permissions' => [
        'websocket_*' => 'Membenarkan akses ke websocket untuk pelayan ini.',
        'control_console' => 'Membenarkan pengguna menghantar data ke konsol pelayan.',
        'control_start' => 'Membenarkan pengguna memulakan instance pelayan.',
        'control_stop' => 'Membenarkan pengguna menghentikan instance pelayan.',
        'control_restart' => 'Membenarkan pengguna memulakan semula instance pelayan.',
        'control_kill' => 'Membenarkan pengguna mematikan instance pelayan.',
        'user_create' => 'Membenarkan pengguna membuat akaun pengguna baharu untuk pelayan.',
        'user_read' => 'Membenarkan pengguna melihat pengguna yang dikaitkan dengan pelayan ini.',
        'user_update' => 'Membenarkan pengguna mengubah suai pengguna lain yang dikaitkan dengan pelayan ini.',
        'user_delete' => 'Membenarkan pengguna memadam pengguna lain yang dikaitkan dengan pelayan ini.',
        'file_create' => 'Membenarkan pengguna membuat fail dan direktori baharu.',
        'file_read' => 'Membenarkan pengguna melihat fail dan folder yang dikaitkan dengan instance pelayan ini, serta melihat kandungannya.',
        'file_update' => 'Membenarkan pengguna mengemaskini fail dan folder yang dikaitkan dengan pelayan.',
        'file_delete' => 'Membenarkan pengguna memadam fail dan direktori.',
        'file_archive' => 'Membenarkan pengguna membuat arkib fail dan mengekstrak arkib yang sedia ada.',
        'file_sftp' => 'Membenarkan pengguna melakukan tindakan fail di atas menggunakan klien SFTP.',
        'allocation_read' => 'Membenarkan akses ke halaman pengurusan peruntukan pelayan.',
        'allocation_update' => 'Membenarkan pengguna membuat pengubahsuaian pada peruntukan pelayan.',
        'database_create' => 'Membenarkan pengguna membuat pangkalan data baharu untuk pelayan.',
        'database_read' => 'Membenarkan pengguna melihat pangkalan data pelayan.',
        'database_update' => 'Membenarkan pengguna membuat pengubahsuaian pada pangkalan data. Jika pengguna tidak mempunyai kebenaran "Lihat Kata Laluan" juga, mereka tidak akan dapat mengubah suai kata laluan.',
        'database_delete' => 'Membenarkan pengguna memadam instance pangkalan data.',
        'database_view_password' => 'Membenarkan pengguna melihat kata laluan pangkalan data dalam sistem.',
        'schedule_create' => 'Membenarkan pengguna membuat jadual baharu untuk pelayan.',
        'schedule_read' => 'Membenarkan pengguna melihat jadual untuk pelayan.',
        'schedule_update' => 'Membenarkan pengguna membuat pengubahsuaian pada jadual pelayan yang sedia ada.',
        'schedule_delete' => 'Membenarkan pengguna memadam jadual untuk pelayan.',
    ],
];

