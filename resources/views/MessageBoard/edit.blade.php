<form action="/ContactForm/edit/{{$contact->id}}" method="POST">
    <div>
        <label for="name">お名前</label>
        <br>
        <input type="text" name="name" id="name" value="{{old('name', $contact->name)}}">
        @if($errors->has('name'))
        <p class="error">*{{$errors->first('name')}}</p>
        @endif
    </div>
    <div>
        <label for="tel">電話番号</label>
        <br>
        <input type="tel" name="tel" id="tel" value="{{old('tel', $contact->tel)}}">
        @if($errors->has('tel'))
        <p class="error">*{{$errors->first('tel')}}</p>
        @endif
    </div>
    <div>
        <label for="male">男性</label>
        <input type="radio" name="gender" id="male" value="male" {{old('male', $contact->gender)}}>

        <label for="female">女性</label>
        <input type="radio" name="gender" id="female" value="female" {{old('female', $contact->gender)}}>

        <label for="LGBTQ">その他</label>
        <input type="radio" name="gender" id="LGBTQ" value="LGBTQ" {{old('LGBTQ', $contact->gender)}}>

        @if($errors->has('gender'))
        <p class="error">*{{$errors->first('gender')}}</p>
        @endif
    </div>
    <div>
        <label for="question">お問い合わせ内容</label>
        <br>
        <textarea name="question" id="" cols="30" rows="10">{{old('question', $contact->question)}}</textarea>
        @if($errors->has('question'))
        <p class="error">*{{$errors->first('question')}}</p>
        @endif
    </div>
    <div>
        <input type="submit" value="送信">
    </div>
    @csrf
</form>