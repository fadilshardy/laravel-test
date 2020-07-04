<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = PertanyaanModel::get_all();

        return view('pertanyaan.index', compact('questions'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $new_question = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function show($id)
    {
        $question = PertanyaanModel::get_question($id);
        $answers = JawabanModel::get_answers($id);

        return view('pertanyaan.show', compact('question', 'answers'));
    }

    public function edit($id)
    {
        $question = PertanyaanModel::get_question($id);

        return view('pertanyaan.edit', compact('question'));

    }

    public function update($id, Request $request)
    {
        $question = PertanyaanModel::update($id, $request->all());

        return redirect('/pertanyaan/' . $id);
    }

    public function destroy($id)
    {
        $question = PertanyaanModel::delete($id);

        return redirect('pertanyaan');
    }
}
