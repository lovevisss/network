<?php

use Illuminate\Database\Seeder;
use App\Server;
class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servers = [['ip' => '10.1.12.6', 'container_id' => '2', 'index' => '2', 'user_id' => '3', 'model' => 'IBM_x3650M3', 'os' => 'Windows2003', 'desc' => '文件服务器', 'admin' => 'administrator', 'password' => 'Dfxy0718.com'],
            ['ip' => '10.1.12.163', 'container_id' => '24', 'index' => '10.1.12.163_server_clone', 'user_id' => '1', 'model' => 'HP_DL380G9', 'os' => 'ubuntu1604', 'desc' => 'drupal版本信息门户', 'admin' => 'root', 'password' => '109405'],
            ['ip' => '10.4.8.251', 'container_id' => '2', 'index' => '1', 'user_id' => '3', 'model' => 'IBM_x3650M3', 'os' => 'Windows2003', 'desc' => '305虚拟桌面','admin' => '', 'password' => ''],
        ];
        Server::truncate();
        foreach($servers as $server)
        {
            Server::create([
                'ip' => $server['ip'],
                'container_id' => $server['container_id'],
                'index' => $server['index'],
                'user_id' => $server['user_id'],
                'model' => $server['model'],
                'os' => $server['os'],
                'desc' => $server['desc'],
                'admin' => $server['admin'],
                'password' => $server['password'],
            ]);
        }
    }
}
