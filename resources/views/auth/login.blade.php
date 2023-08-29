<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/login" method="post">
    @csrf
    <label for="username">
      username
      <input type="text"name="username">
    </label> <br>
    @error('username')
    {{ $message }}
    @enderror
    <br>
    <label for="password">
      password
      <input type="text"name="password">
    </label> <br>
    <button type="submit">sign in</button>
  </form>
  <span>
  baru nongol<a href="/register">buat akun</a>
  </span>
</body>
</html>