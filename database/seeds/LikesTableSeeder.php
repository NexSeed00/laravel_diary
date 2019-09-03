<?php

use App\Diary;
use App\Like;
use App\User;
use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // usersテーブルから先頭のデータを1つ取得
        $user = User::first();

        // diariesテーブルからデータを全て取得
        $diaries = Diary::all();

        // diariesテーブルの数だけ繰り返し
        foreach ($diaries as $diary) {
            // likesテーブルを作成
            factory(Like::class)->create([
                // 上で取得したuserのid
                'user_id' => $user->id,
                // 上で取得したdiaryのid
                'diary_id' => $diary->id
            ]);
        }
    }
}
