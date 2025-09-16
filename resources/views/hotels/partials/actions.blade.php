<div class="btn-group btn-group-sm">
    <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-outline-primary">Edit</a>
    <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" onsubmit="return confirm('Delete this hotel?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>
</div>
