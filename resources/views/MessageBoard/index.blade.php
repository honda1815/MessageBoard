<h2>お問い合わせの一覧</h2>

@if ($contacts->count() > 0)
    <table border="1">
        <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>送信日時</th>
            <th>連絡先</th>
            <th>伝言の宛先</th>
            <th>内容・詳細</th>
        </tr>
        {{-- @foreach ディレクティブで、1件ずつ処理 --}}
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->add }}</td>
                <td>{{ $contact->message_add}}</td>
                <td>{{ $contact->coment }}</td>
                <td><a href="/MessageBoard/edit/{{$contact->id}}">編集</a></td>
                <td>
                    <form action="/MessageBoard/delete/{{$contact->id}}" method="get">
                    <input type="submit" name="delete" value="削除">
                    @csrf
                </form>
                </td>
            </tr>
        @endforeach
    </table>
@else
    <p>お問い合わせがありません</p>
@endif
