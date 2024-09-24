<?php
$menu = [
    [
        "nama"=> "Bercanda"
    ],
    [
        "nama"=>"Berita",
        "subMenu" =>[
            [
                "nama" =>"Wisata",
                "subMenu"=>[
                    [
                        "nama"=>"pantai"
                    ],
                    [
                        "nama"=>"gunung"
                    ]
                ]
            ],
            [
                "nama"=>"kuliner"
            ],
            [
                "nama"=>"hiburan"
            ]
        ]
    ],
    [
        "nama"=>"Tentang"
    ],
    [
        "nama" => "kontak"
    ],
];

function tampilMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilMenuBertingkat($menu);