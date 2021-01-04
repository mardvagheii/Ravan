<?php

namespace App\Http\Controllers\Admins\Main;

use App\Http\Controllers\Controller;
use App\lib\Messages\FlashMessage;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function Add(Request $request)
    {
        if ($request->title) {
            $res = Question::create($request->only(['title', 'description',]));
            if ($res) {
                FlashMessage::set('success', 'سوال جدید ثبت شد');
                return back();
            } else {
                FlashMessage::set('danger', 'درخواست نامعتبر');
                return back();
            }
        } else {
            FlashMessage::set('danger', 'درخواست ناقص');
            return back();
        }
    }

    public function destroy(Request $request)
    {
        if ($request->id) {
            $res = Question::where('id', $request->id)->delete();
            if ($res) {
                FlashMessage::set('success', 'حذف انجام شد');
                return back();
            } else {
                FlashMessage::set('danger', 'درخواست نامعتبر');
                return back();
            }
        } else {
            FlashMessage::set('danger', 'درخواست ناقص');
            return back();
        }
    }
}
