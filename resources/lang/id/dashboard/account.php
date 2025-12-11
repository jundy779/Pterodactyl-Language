<?php

return [
    'email' => [
        'title' => 'Perbarui email Anda',
        'updated' => 'Alamat email Anda telah diperbarui.',
    ],
    'password' => [
        'title' => 'Ubah kata sandi Anda',
        'requirements' => 'Kata sandi baru Anda harus minimal 8 karakter.',
        'updated' => 'Kata sandi Anda telah diperbarui.',
    ],
    'two_factor' => [
        'button' => 'Konfigurasi Autentikasi 2-Faktor',
        'disabled' => 'Autentikasi dua faktor telah dinonaktifkan pada akun Anda. Anda tidak akan lagi diminta untuk memberikan token saat login.',
        'enabled' => 'Autentikasi dua faktor telah diaktifkan pada akun Anda! Mulai sekarang, saat login, Anda akan diminta untuk memberikan kode yang dihasilkan oleh perangkat Anda.',
        'invalid' => 'Token yang diberikan tidak valid.',
        'setup' => [
            'title' => 'Setup autentikasi dua faktor',
            'help' => 'Tidak bisa memindai kode? Masukkan kode di bawah ini ke aplikasi Anda:',
            'field' => 'Masukkan token',
        ],
        'disable' => [
            'title' => 'Nonaktifkan autentikasi dua faktor',
            'field' => 'Masukkan token',
        ],
    ],
];

