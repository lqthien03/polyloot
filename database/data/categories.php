<?php


$parentCategories = [
    [
        'id' => 1,
        'name' => 'Đồ điện tử',
        'cover_img' => '',
        'description' => '',

    ],
    [
        'id' => 2,
        'name' => 'Thời trang & Đồ dùng cá nhân',
        'cover_img' => '',
        'description' => '',

    ],

    [
        'id' => 3,
        'name' => 'Học tập & Tài liệu',
        'cover_img' => '',
        'description' => '',

    ],

    [
        'id' => 4,
        'name' => 'Đồ gia dụng & Nội thất',
        'cover_img' => '',
        'description' => '',

    ],

    [
        'id' => 5,
        'name' => 'Thể thao & Sở thích',
        'cover_img' => '',
        'description' => '',

    ],
];


$childCategories = [
    [
        'parent_id' => 1,
        'name' => 'Điện thoại',
        'cover_img' => '',
        'description' => '',
    ],

    [
        'parent_id' => 1,
        'name' => 'Máy tính bảng',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 1,
        'name' => 'Laptop',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 1,
        'name' => 'Máy tính để bàn',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 1,
        'name' => 'Máy ảnh, Máy quay',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 1,
        'name' => 'Linh kiện (Ram, Card, …)',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 1,
        'name' => 'Phụ kiện (Bàn phím, tai nghe, chuột, …)',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 1,
        'name' => 'Khác',
        'cover_img' => '',
        'description' => '',
    ],



    [
        'parent_id' => 2,
        'name' => 'Quần áo',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 2,
        'name' => 'Giày dép',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 2,
        'name' => 'Túi & Balo',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 2,
        'name' => 'Đồng hồ',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 2,
        'name' => 'Khác',
        'cover_img' => '',
        'description' => '',
    ],


    [
        'parent_id' => 3,
        'name' => 'Sách',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 3,
        'name' => 'Văn phòng phẩm',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 3,
        'name' => 'Khác',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 4,
        'name' => 'Bàn ghế',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 4,
        'name' => 'Đèn',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 4,
        'name' => 'Quạt',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 4,
        'name' => 'Đồ trang trí',
        'cover_img' => '',
        'description' => '',
    ],
    [
        'parent_id' => 4,
        'name' => 'Khác',
        'cover_img' => '',
        'description' => '',
    ],

    [
        'parent_id' => 5,
        'name' => 'Đồ dùng thể thao',
        'cover_img' => '',
        'description' => '',
    ],  [
        'parent_id' => 5,
        'name' => 'Nhạc cụ',
        'cover_img' => '',
        'description' => '',
    ],
     [
        'parent_id' => 5,
        'name' => 'Khác',
        'cover_img' => '',
        'description' => '',
    ],


];

return array_merge($parentCategories, $childCategories);
