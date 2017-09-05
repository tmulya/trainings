<form action='/test' method="POST">
{{ csrf_field() }}
<input type="text" name="name" placeholder="Name">
<button type="submit">Save</button>
</form>