@extends('main')

@section('content')
<table>
	<thead>
		<tr colspan="5">
			<th>{{ $com }}</th>
		</tr>
		<tr>
			<th>Enrollment</th>
			<th>Name</th>
			<th>Package</th>
			<th>Branch</th>
			<th>Sem</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $d)
		<tr>
			<td><a href="/placementrecord/student/{{ $d->enrollment }}">{{ $d->enrollment }}</a></td>
			<td>{{ $d->name }}</td>
			<td>{{ $d->package }}</td>
			<td>{{ $d->branch }}</td>
			<td>{{ $d->sem }}</td>
		</tr>
		@endforeach
	</tbody>
</table>




@endsection()