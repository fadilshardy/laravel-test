<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $questions = DB::table('pertanyaans')->get();
        return $questions;
    }

    public static function save($data)
    {
        unset($data["_token"]);
        $data['tanggal_dibuat'] = date('Y-m-d H:i:s');
        $data['tanggal_diperbaharui'] = date('Y-m-d H:i:s');
        $new_question = DB::table('pertanyaans')->insert($data);
        return $new_question;
    }

    public static function update($id, $data)
    {
        unset($data["_token"]);
        unset($data["_method"]);

        $data['tanggal_diperbaharui'] = date('Y-m-d H:i:s');
        $update_question = DB::table('pertanyaans')
            ->where('id', $id)
            ->update($data);
        return $update_question;
    }

    public static function get_question($id)
    {
        $question = DB::table('pertanyaans')->where('id', '=', $id)->first();
        return $question;
    }

    public static function delete($id)
    {
        $deleted = DB::table('pertanyaans')->where('id', '=', $id)->delete();
    }

}
