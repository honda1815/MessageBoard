<p>お問い合わせ内容確認</p>
<ul>
    <li>
        お名前：
        <p>{{$request->name}}</p>
    </li>
    <li>
        連絡先：
        <p>{{$request->add}}</p>
    </li>
    <li>
        伝言の宛先：
        <p>{{$request->message_add}}</p>
    </li>
    <li>
        要件・詳細：
        <p>{{$request->comment}}</p>
    </li>
</ul>

{{-- action属性を空にしておくと、今のページに対してリクエストを送信する --}}
<form action="" method="POST">
    {{-- type="hidden" で、画面非表示の状態で入力内容を保持しておく --}}
    <input type="hidden" name="name" value="{{$request->name}}">
    <input type="hidden" name="add" value="{{$request->add}}">
    <input type="hidden" name="message_add" value="{{$request->message_add}}">
    {{-- <textarea name="question" id="" cols="30" rows="10">お問い合わせ内容</textarea> --}}
    <input type="hidden" name="comment" value="{{$request->comment}}">
     <div>
         {{-- 戻るボタンにback というname属性を持たせておき、ボタンが押されたかどうかを判定できるようにする --}}
         <input type="submit" name="back" value="戻る">
    <!-- <button class="btn btn-primary" type="submit" name="back">
        <i class="fa-solid fa-caret-left fa-2xl"></i> 戻る <i class="fa-solid fa-shrimp fa-shake fa-2xl"></i></button> -->
    </div>
    @csrf
</form>

<div>
    <form action="" method="POST">

        <div>
            <input type="hidden" name="name" id="name" value="{{$request->name}}">
            <input type="hidden" name="add" id="add" value="{{$request->add}}">
            <input type="hidden" name="message_add" id="message_add" value="{{$request->message_add}}">
            <input type="hidden" name="comment" id="comment" value="{{$request->comment}}">
            {{-- @if ($errors->has('項目名')) でエラーがあるかを判定 --}}
            @if ($errors->has('name'))
            <p class="error">*{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div>
            <input type="submit" name="send" value="送信">
            <!-- <button class="btn btn-primary" type="submit" name="send" value="送信">
                <i class="fa-solid fa-otter fa-shake fa-2xl"></i> 送信 <i class="fa-solid fa-caret-right fa-2xl"></i></button> -->
        </div>
        {{-- GET メソッド以外でリクエストする場合は、@csrfを含める --}}
        @csrf
    </form>
</div>

----------
<a href="http://localhost/MessageBoard/add">お問い合わせ画面へ戻る</a>

@csrf
</form>
