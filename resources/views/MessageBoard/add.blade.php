
<h1>入力画面</h1>
<p>伝言板</p>

    @foreach($errors->all() as $error)
    <li><span class="error">{{$error}}</span></li>
    @endforeach

<form action="/MessageBoard/confirm" method="post">

    <div>
        <label for="name">お名前</label>
        <br>
        <input type="text" id="name" name="name" value="{{old('name')}}">
         @if($errors->has('name'))
        <span class="error">{{$errors->first('name')}}</span>
         @endif
    </div>
        <br>
    <div>
        <label for="add">連絡先</label>
        <br>
        <input type="add" id="add" name="add" value="{{old('add')}}">
         @if($errors->has('add'))
        <span class="error">{{$errors->first('add')}}</span>
         @endif
     </div>
        <br>
    <div>
        <label for="message_add">伝言の宛先</label>
        <br>
        <input type="text" id="" name="message_add" value="{{old('message_add')}}">
         @if($errors->has('message_add'))
        <span class="error">{{$errors->first('message_add')}}</span>
        @endif
    </div>
        <br>
    <div>
        <label for="comment">要件・詳細</label>
        <br>
        <textarea name="comment" id="" cols="20" rows="10"></textarea>

        {{-- <label for="question">お問い合わせ内容</label>
        <input type="text" id="" name="question" value="{{old('question')}}">
         @if($errors->has('question'))
        <span class="error">{{$errors->first('question')}}</span> --}}

    </div>
        <br>
    <div>
        <input type="submit" value="確認">
         {{-- <button class="btn btn-primary" type="submit" value="確認">
           確認  <i class="fa-solid fa-cat fa-bounce fa-2xl"></i>>
         </button> --}}

        {{-- @if($errors->has('name'))
        <span class="error">{{$errors->first('name')}}</span>
        @endif --}}


    </div>
    @csrf
</form>
