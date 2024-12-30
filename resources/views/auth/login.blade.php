<div>
  <h1>Login</h1>
  
  <form action="/login" method="POST">
    @csrf
    
    <input type="email" placeholder="your@email.com" name="email" value="{{ old('email') }}">
    <input type="password" placeholder="********" name="password">
    
    <button>Logar</button>
  </form>
</div>