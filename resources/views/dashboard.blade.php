<h1>Dashboard</h1>

@if($message = session()->get('message'))
  <p>{{ $message }}</p>
@endif

<a href="{{ route('links.create') }}">New Link</a>

<ul>
  @foreach($links as $link)
    <li style="display: flex;">
    
      @unless($loop->last)
        <form action="{{ route('links.down', $link) }}" method="POST">
          @csrf
          @method('PATCH')
          <button type="submit">⬇️</button>
        </form>
      @endunless
     
      @unless($loop->first)
        <form action="{{ route('links.up', $link) }}" method="POST">
          @csrf
          @method('PATCH')
          <button type="submit">⬆️</button>
        </form>
      @endunless
      
      <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
      
      <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Have shure?')">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </li>
  @endforeach
</ul>