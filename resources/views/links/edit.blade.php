<div>
  <h1>Edit a Link :: {{ $link->id }}</h1>
  
  <form action="{{ route('links.edit', $link) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
      <input type="text" placeholder="Name" name="name" value="{{ old('name', $link->name) }}">
      
      @error('name')
      <span>
          {{ $message }}
      </span>
      @enderror
    </div>
    <br>
    
    <div>
      <input type="text" placeholder="www.yourlink.com" name="link" value="{{ old('link', $link->link) }}">
      
      @error('link')
      <span>
          {{ $message }}
      </span>
      @enderror
    </div>
    <br>
    
    <button>Edit Link</button>
  </form>
</div>