<div>
    <h1>Register</h1>
    
    <form action="{{ route('register') }}" method="POST">
        @csrf
        
        <div>
            <input type="name" placeholder="Your Name" name="name" value="{{ old('name') }}">
            
            @error('name')
            <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <br>
        
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
            <input type="email" placeholder="Confirm your Email" name="email_confirmation">
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