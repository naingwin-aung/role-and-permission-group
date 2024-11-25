<?php

return [
    'default' => [
        [
            'name' => 'User',
            'permissions' => [
                'view_user',
                'add_user',
                'edit_user',
                'delete_user',
            ],
        ],
        [
            'name' => 'Role',
            'permissions' => [
                'view_role',
                'add_role',
                'edit_role',
                'delete_role',
            ],
        ],
    ],
];