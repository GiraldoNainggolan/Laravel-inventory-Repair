<?php

namespace App\Enums;

enum OrderStatus: string
{
    case PENDING  = 'Menunggu Konfirmasi';
    case VERIFIED = 'Permintaan Diterima';
    case SUCCESS  = 'Barang Telah Tersedia';
    case DONE     = 'Permintaan Selesai';
}
