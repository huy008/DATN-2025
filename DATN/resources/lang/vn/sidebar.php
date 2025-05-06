<?php   
return [
    'module' => [
        [
            'title' => 'QL sản phẩm',
            'icon' => 'fa fa-cube',
            'name' => ['product','attribute'],
            'subModule' => [
                [
                    'title' => 'QL Nhóm sản phẩm',
                    'route' => 'product/catalogue/index'
                ],
                [
                    'title' => 'QL sản phẩm',
                    'route' => 'product/index'
                ],
                [
                    'title' => 'QL Loại thuộc tính',
                    'route' => 'attribute/index'
                ],
                [
                    'title' => 'QL thuộc tính',
                    'route' => 'attribute/value/index'
                ],

            ]
        ],
        // [
        //     'title' => 'QL Bài viết',
        //     'icon' => 'fa fa-file',
        //     'name' => ['post'],
        //     'subModule' => [
        //         [
        //             'title' => 'QL Nhóm Bài Viết',
        //             'route' => 'post/catalogue/index'
        //         ],
        //         [
        //             'title' => 'QL Bài Viết',
        //             'route' => 'post/index'
        //         ]
        //     ]
        // ],
        [
            'title' => 'QL Nhóm Thành Viên',
            'icon' => 'fa fa-user',
            'name' => ['user','permission'],
            'subModule' => [
                [
                    'title' => 'QL Thành Viên',
                    'route' => 'user/index'
                ],
            ]
        ],
        [
            'title' => 'Quản lý đơn hàng',
            'icon' => 'fa fa-file',
            'name' => ['language','generate'],
            'subModule' => [
                [
                    'title' => 'Quản lý đơn hàng',
                    'route' => 'order/index'
                ]    
            ]
                ],
         [
            'title' => 'Quản lý đánh giá',
            'icon' => 'fa fa-file',
            'name' => ['language','generate'],
            'subModule' => [
                [
                    'title' => 'Quản lý đánh giá',
                    'route' => 'review/index'
                ]    
            ]
                ],
        [
            'title' => 'Quản lý khuyến mãi',
            'icon' => 'fa fa-file',
            'name' => ['language', 'generate'],
            'subModule' => [
                [
                    'title' => 'Quản lý khuyến mãi',
                    'route' => 'discounts'
                ]
            ]
        ]
    ],
];
