<?php


namespace App\Http\Controllers;

use App\Helper\FunctionHelper as AppHelperFunctionHelper;
use App\Models\Question;
use App\Models\User;
use App\Helper\FunctionHelper;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{


    public function index()
    {
        $users=User::where('status','=',1)->paginate(10);

        return view('app.users.index',compact('users'));

        //
    }


    public function show($id)
    {

        $user=User::where("_id","=",(int)($id))->first();


        return view('app.users.show')->with('user', $user);
        //
    }


    public function blockedList(){

        $users=User::where('status','=',0)->paginate(10);


    return view('app.users.blockedList',compact('users'));
    }
    public function block(Request $request,FunctionHelper $functionHelper){
        // dump($request);
        $user=User::where("_id","=",(int)($request->id))->first();
// dd($user);
        $user->status=0;
        $user->save();
        $functionHelper->sendTelegramMessage((int)$request->id,"🚫 We regret to inform you that your access to the bot has been restricted. If you have questions or concerns about this decision, please contact our support team at [sbsena@gmail.com]. Thank you for your understanding. 🤖 #BotAccess");


        $users=User::where('status','=',1)->paginate(10);


        return view('app.users.index',compact('users'));
    }
    public function unBlock(Request $request,FunctionHelper $functionHelper){



        $user=User::where("_id","=",(int)($request->id))->first();

        $user->status=1;
        $user->save();

        $functionHelper->sendTelegramMessage((int)$request->id,"🎉 Great news! Your access to the bot has been restored. We appreciate your patience and understanding. If you have any questions or concerns, feel free to reach out to our support team at [sbsena@gmail.com]. Welcome back, and enjoy your time on the bot! 🤖✨ #BotAccess");

        $users=User::where('status','=',0)->paginate(10);



    return view('app.users.blockedList',compact('users'));
    }

    //
}
