<table>
	<thead>
		<th>Nama</th>
		<th>address</th>
		<th>nim</th>
		<th>sex</th>
	</thead>
	<tbody>
		@foreach ($mhs as $m)
		<tr>
			<td>{{ $m->nama }}</td>
			<td>{{ $m->address }}</td>
			<td>{{ $m->nim }}</td>
			<td>{{ $m->sex }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
