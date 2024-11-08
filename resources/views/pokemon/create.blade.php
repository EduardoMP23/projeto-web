<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="type" placeholder="Type" required>
    <input type="integer" name="strenght" placeholder="Strenght" required>
    <button type="submit">Create Product</button>
</form>