@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

  <div class="container">

  <table class="table table-bordered table-striped table-hover ">
<thead>
<tr>
  <th>ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>Phone</th>
  {{-- <th class="text-center">Action</th> --}}
</tr>
</thead>
<tbody>
  @foreach ($faculties  as $faculty)
  <tr>
    <td>{{ $faculty->id }}</td>
    <td>{{ $faculty->first_name }}</td>
    <td>{{ $faculty->last_name }}</td>
    <td>{{ $faculty->email }}</td>
    <td>{{ $faculty->phone }}</td>

  </tr>
  @endforeach
</tbody>
</table>
{{-- {{ $students->links() }} --}}
</div>
@endsection
