<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use App\Models\TestQuestion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('pages/Generate/generate');
    }

    public function question_collection()
    {
        $questionModel = new QuestionBank();
        $questions = $questionModel::all();
        return view('pages/Generate/question_collection', ['questions' => $questions]);
    }

    public function detail_collection()
    {
        $questionModel = new QuestionBank();
        $questions = $questionModel::all();
        return view('pages/Generate/detail_collection', ['questions' => $questions]);
    }

    public function add_question_manual()
    {
        return view('pages/Generate/add_question_manual');
    }

    public function add_question_test()
    {
        return view('pages/Generate/add_question_test');
    }

    public function removeQuestion($id)
    {
        $questionModel = new QuestionBank();
        $testQuestionModel = new TestQuestion();
        $testQuestionModel::where('question_id', $id)->delete();
        $questionModel::where('id', $id)->delete();
        return redirect('/question-collection');
    }

    public function addQuestiontoTest($testId, $id)
    {
        $testQuestionModel = new TestQuestion();
        $testQuestionModel::insert([
            'question_id' => $id,
            'test_id' => $testId,
        ]);
        return redirect('/cbt/select-question/' . $testId);
    }
}
