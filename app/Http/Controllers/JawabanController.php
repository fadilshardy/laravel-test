<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id)
    {
        $answers = JawabanModel::get_answers($id);
        $question_id = $id;
        return view('jawaban.index', compact('answers', 'question_id'));
    }

    public function store(Request $request, $id)
    {
        $request->request->add(['pertanyaan_id' => $id]);

        $new_question = JawabanModel::save($request->all());

        return redirect('/pertanyaan/' . $id);
    }
}
