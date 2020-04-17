<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [[
            'id'         => '1',
            'title'      => 'user_management_access',
            'created_at' => '2019-03-25 18:52:31',
            'updated_at' => '2019-03-25 18:52:31',
        ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '17',
                'title'      => 'sync_server_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '18',
                'title'      => 'sync_server_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '19',
                'title'      => 'sync_server_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '20',
                'title'      => 'sync_server_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '21',
                'title'      => 'sync_server_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '22',
                'title'      => 'channel_server_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '23',
                'title'      => 'channel_server_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '24',
                'title'      => 'channel_server_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '25',
                'title'      => 'channel_server_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '26',
                'title'      => 'channel_server_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '27',
                'title'      => 'channel_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '28',
                'title'      => 'channel_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '29',
                'title'      => 'channel_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '30',
                'title'      => 'channel_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '31',
                'title'      => 'channel_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '32',
                'title'      => 'csi_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '33',
                'title'      => 'csi_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '34',
                'title'      => 'csi_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '35',
                'title'      => 'csi_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '36',
                'title'      => 'csi_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '37',
                'title'      => 'channel_server_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '38',
                'title'      => 'system_default_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '39',
                'title'      => 'sync_server_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '40',
                'title'      => 'cso_create',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '41',
                'title'      => 'cso_edit',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '42',
                'title'      => 'cso_show',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '43',
                'title'      => 'cso_delete',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ],
            [
                'id'         => '44',
                'title'      => 'cso_access',
                'created_at' => '2019-03-25 18:52:31',
                'updated_at' => '2019-03-25 18:52:31',
            ]];

        Permission::insert($permissions);
    }
}
