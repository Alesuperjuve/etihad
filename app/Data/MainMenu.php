<?php

namespace App\Data;

class MainMenu
{
    public static function getAll()
    {
        return [
            [
                'no'        => 1,
                'nama'      => 'Main',
                'link'      => 'dashboard',
                'aktif'     => '1',
                'level'     => '1',
                'icon'      => 'mdi mdi-view-dashboard menu-icon',
            ],
            [
                'no'        => 2,
                'nama'      => 'Placard',
                'link'      => 'placard',
                'aktif'     => '1',
                'level'     => '1',
                'icon'      => 'mdi mdi-view-list menu-icon',
            ],
            [
                'no'        => 3,
                'nama'      => 'Maskapai',
                'link'      => 'maskapai',
                'aktif'     => '0',
                'level'     => '1',
                'icon'      => 'mdi mdi-airplane menu-icon',
            ],
            [
                'no'        => 4,
                'nama'      => 'Pesawat',
                'link'      => 'pesawat',
                'aktif'     => '1',
                'level'     => '1',
                'icon'      => 'mdi mdi-airplane-takeoff menu-icon',
            ],
            [
                'no'        => 5,
                'nama'      => 'Pegawai',
                'link'      => 'pegawai',
                'aktif'     => '1',
                'level'     => '1',
                'icon'      => 'mdi mdi-account-box menu-icon',
            ],
            [
                'no'        => 6,
                'nama'      => 'Part Number',
                'link'      => 'partnumber',
                'aktif'     => '1',
                'level'     => '1',
                'icon'      => 'mdi mdi-numeric menu-icon',
            ],
            [
                'no'        => 7,
                'nama'      => 'Reference',
                'link'      => '#laporan',
                'aktif'     => '1',
                'level'     => '1',
                'icon'      => 'icon-paper menu-icon',
            ],
        ];
    }
}
