<div>
  <h1>Login</h1>
  
  <form action="{{ route('login') }}" method="POST">
    @csrf

    <div>
      <input type="email" placeholder="your@email.com" name="email" value="{{ old('email') }}">
      
      @error('email')
      <span>
        {{ $message }}
      </span>
      @enderror
    </div>
    <br>
    <div>
      <input type="password" placeholder="********" name="password">
      @error('password')
      <span>
        {{ $message }}
      </span>
      @enderror
    </div>
    <br>
    <button>Logar</button>
  </form>
</div>