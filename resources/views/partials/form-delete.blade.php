
<form action="{{ route('coffees.destroy', $coffee) }}" method="POST"
    onsubmit="return confirm('confermi l\'eliminazione di {{ $coffee->title }}')">
    @csrf
    @method('DELETE')

    <button title="Delete" type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>
    </button>
</form>