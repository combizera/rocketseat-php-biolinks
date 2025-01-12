<h1>Dashboard</h1>

@if($message = session()->get('message'))
  <p>{{ $message }}</p>
@endif

<a href="{{ route('links.create') }}">New Link</a>

<ul>
  @foreach($links as $link)
    <li>
      <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
      
      <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Have shure?')">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
    </li>
  @endforeach
</ul>