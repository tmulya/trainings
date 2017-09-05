<h1>Create Mahasiswa</h1>
<form method="POST" action="/mahasiswa">
{{ csrf_field() }}
	<input type="text" name="nama" placeholder="Nama">
	<input type="textarea" name="address" placeholder="Address">
	<input type="text" name="nim" placeholder="Nim">
	<input type="text" name="sex" placeholder="Sex">
	<button type="submit">Save</button>
</form>