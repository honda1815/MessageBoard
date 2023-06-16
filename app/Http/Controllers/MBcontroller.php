<?php

namespace App\Http\Controllers;

use App\Models\MessageBoard;
use Illuminate\Http\Request;

class MBcontroller extends Controller
{
    public function add()
    {
        return view("MessageBoard/add");
    }
    public function confirm(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'name' => ['required', 'min:2', 'max:100'],
        //     'tel' => ['required', 'min:10', 'max:13'],
        //     'gender' => ['required']
        // ]);

        // $this->validate($request, [
        //     'name' => ['required', 'min:2', 'max:100'],
        // ]);
        // $this->validate($request, [
        //     'add' => ['required'],
        // ]);
        // $this->validate($request, [
        //     'message_add' => ['required']
        // ]);
        // $this->validate($request, [
        //     'comment' => ['required']
        // ]);

        if ($request->has('back')) {
            /* withInput() で、現在の入力内容をリダイレクトのリクエストに付加する */
            return redirect('/MessageBoard/add')->withInput();
        }
        if ($request->has('send')) {
            // dd($request->all());
            /* Contact モデルのオブジェクトを作成 */
            $new_contact = new MessageBoard();

            /* リクエストで渡された値を設定する */
            $new_contact->name = $request->name;
            $new_contact->add = $request->add;
            $new_contact->message_add = $request->message_add;
            $new_contact->comment = $request->comment;

            /* データベースに保存 */
            $new_contact->save();

            /* 完了画面を表示する */
            // return redirect('/MessageBoard/complete');
            return view('/MessageBoard/complete');
        }
        return view('/MessageBoard.confirm', compact('request'));
    }
    public function index()
    {
        /* お問い合わせのレコードをすべて取得 */
        $contacts = MessageBoard::all();
        return view('MessageBoard.index', compact('contacts'));
    }
    public function delete($id)
    {
        $contact_to_delete = MessageBoard::find($id);
        $contact_to_delete->delete();
        return redirect('/MessageBoard/index');
    }

    public function edit($id)
    {
        $contact = MessageBoard::find($id);

        return view('MessageBoardm.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:100'],
            'add' => ['required'],
            'message_add' => ['required'],
            'comment' => ['required']
        ]);
        $contact = MessageBoard::find($id);
        $contact->name = $request->name;
        $contact->add = $request->add;
        $contact->message_add = $request->message_add;
        $contact->comment = $request->comment;
        $contact->save();

        return redirect('/MessageBoard/index');
    }
}
