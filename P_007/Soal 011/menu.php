<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "pantai"
                    ],
                    [
                        "nama" => "gunung"
                    ]
                ]
            ],
            [
                "nama" => "kuliner"
            ],
            [
                "nama" => "hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li> ";
    }
    echo "</ul>";
}

tampilMenuBertingkat($menu);