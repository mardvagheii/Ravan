<?php

namespace app\Http\Controllers\Users\Main;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainControllerUser extends Controller
{


    public function Dashboard()
    {
        return view('Users.Main.Dashboard');
    }



    public function Profile()
    {
        return view('Users.Main.Profile');
    }



    public function NowAdviced()
    {
        return view('Users.Main.NowAdviced');
    }



    public function FuturistAdvice()
    {
        return view('Users.Main.FuturistAdvice');
    }



    public function Conversations()
    {
        return view('Users.Main.Conversations');
    }



    public function Share(Request $request)
    {
        $CallerId = Auth::user()->id;
        $UserMobileNumber = $request->mobile;
        $FinalURL = url('Login?CallerId='.$CallerId);
        dd($FinalURL);
        // کد یو آر ال رو به شماره ی وارد شده پیامک کن
        return redirect(back());
    }



    public function Transactions()
    {
        return view('Users.Main.Transactions');
    }



    public function Support()
    {
        return view('Users.Main.Support');
    }



    public function Assist()
    {
        return view('Users.Main.Assist');
    }


    public function Info()
    {
        return view('Web.About');
    }



    public function ListAdvisors()
    {
        return view('Users.Main.ListAdvisors');
    }



    public function Chat()
    {
        return view('Users.Main.Chat');
    }



    public function List()
    {
        return view('Users.Main.List');
    }




}
