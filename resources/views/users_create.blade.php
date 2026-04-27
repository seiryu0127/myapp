<h1>ユーザー登録</h1>

<form method="POST" action="/users">
    @csrf

    <input type="text" name="name" placeholder="名前">
    <input type="email" name="email" placeholder="メール">

    <button type="submit">登録</button>
</form>