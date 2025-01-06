<div>
  <h1>Create a Link</h1>
  
  <form action="{{ route('links.create') }}" method="POST">
    @csrf
    
    <div>
      <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
      
      @error('name')
      <span>
          {{ $message }}
      </span>
      @enderror
    </div>
    <br>
    
    <div>
      <input type="text" placeholder="www.yourlink.com" name="link" value="{{ old('link') }}">
      
      @error('link')
      <span>
          {{ $message }}
      </span>
      @enderror
    </div>
    <br>
    
    <button>Create new Link</button>
  </form>
</div>