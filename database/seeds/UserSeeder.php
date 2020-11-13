<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '������Ϻ',
                'nickname' => '��ޤ���',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '��ë�ֻ�',
                'nickname' => '�ϤʤϤ�',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '��ƣ��Ϻ',
                'nickname' => '����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '������',
                'nickname' => '������',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '������',
                'nickname' => '�����ä�',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => 'Ĺë����Τ',
                'nickname' => '�Ϥ��ߤ�',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '��ƣ��',
                'nickname' => '���Ȥ����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '��������',
                'nickname' => '���ä����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '������',
                'nickname' => '�Ϥ����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '�����',
                'nickname' => '�����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '���ڤȤ⤳',
                'nickname' => '�����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => 'ð����',
                'nickname' => '���꡼��',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '�����¹�',
                'nickname' => '�ޤäĤ�',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '�ʰ濿��',
                'nickname' => '�ޥ���',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],
            [
                'name' => '��������',
                'nickname' => '�����ˤä����',
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(8),
            ],

        ]);
    }
}
