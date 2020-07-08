<h1>Sua Nguoi Dung ID {{$user->id}}</h1>
<form action="/users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="name">Ten</label>
        <input type="text" name="name" value="{{$user->name}}" id="name">
    </div>
    <div>
        <label for="email">Thu Dien Tu</label>
        <input type="email" name="email" value="{{$user->email}}" id="email">
    </div>
    <div>
        <label for="password">Mat Khau</label>
        <input type="password" name="password" value="{{$user->password}}" id="password">
    </div>
    <button type="submit">Sua</button>
</form>