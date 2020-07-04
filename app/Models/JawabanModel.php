<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function get_question($id)
    {
        $question = DB::table('pertanyaans')->where('id', '=', $id)->first();
        return $question;
    }

    public static function get_answers($id)
    {
        $questions = DB::table('jawabans')->where('pertanyaan_id', '=', $id)->get();
        return $questions;
    }

    public static function save($data)
    {
        unset($data["_token"]);
        $data['tanggal_dibuat'] = date('Y-m-d H:i:s');
        $data['tanggal_diperbaharui'] = date('Y-m-d H:i:s');

        $new_answer = DB::table('jawabans')->insert($data);
        return $new_answer;
    }

}
