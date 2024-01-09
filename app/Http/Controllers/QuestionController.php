<?php

namespace App\Http\Controllers;

use App\Helper\FunctionHelper as AppHelperFunctionHelper;
use App\Models\Question;
use App\Models\User;
use App\Helper\FunctionHelper;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user=User::where('_id',99999)->first();

        $questions=Question::where('status','=','requested')->paginate(10);

        return view('app.questions.index',compact('questions'));
    }


    public function all(Request $request){
        $searchApproved = $request->get('searchApproved', '');
        $searchRejected = $request->get('searchRejected', '');

    $approved_questions=Question::where('status','=','approved')?->paginate(10);
    $rejected_questions=Question::where('status','=','rejected')?->paginate(10);


    return view('app.questions.list',compact('approved_questions','rejected_questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function approve(Request $request,FunctionHelper $functionHelper)
    {
        // dump($request);
        $question=Question::where('_id','=',$request->_id)?->first();
        if($question){
            $question->status="approved";
            $question->save();
            // dd($request->_id,$question);

             $functionHelper->sendTelegramMessage($question->user_id,"🎉 Congratulations! Your quiz question has been approved and is now part of our quiz bank! 🌟 Thank you for your valuable contribution to our growing knowledge community. Your dedication to enhancing the quiz experience is truly appreciated. Keep the questions coming, and let's continue to make learning engaging and fun together! 🧠✨ #QuizContributor");
             return redirect()
             ->route('question.index')
             ->with('success','Successfully Approved');
            }
            else{
                return redirect()
                ->route('question.index')
                ->with('error','No such question');

            }
            //
        }
        public function reject(Request $request,FunctionHelper $functionHelper)
        {
            // dump($request);
            $question=Question::where('_id','=',$request->_id)?->first();
            if($question){
                $question->status="rejected";
                $question->save();
                // dd($request->_id,$question);
                $functionHelper->sendTelegramMessage($question->user_id,"🚫 We appreciate your effort in contributing a quiz question! However, after careful review, we regret to inform you that the question did not meet our quality standards for inclusion. We encourage you to refine and resubmit your questions, keeping in mind accuracy, clarity, and relevance. Your dedication to improving our quiz bank is valued, and we look forward to future submissions. Thank you for your understanding! 🧠 #QuizContributor");
            return redirect()
            ->route('question.index')
            ->with('warning','Successfully Rejected');
        }
        else{
            return redirect()
            ->route('question.index')
            ->with('error','No such question');

        }
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {

        return view('app.questions.show')->with('question', $question);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }



}
