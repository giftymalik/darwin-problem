@extends('layouts/app')

@section('title', 'CVs')
@section('content')
<table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Status</th>
        <th>Application Date</th>
        <th>Application</th>
    </tr>
    @foreach ($cvs as $cv)
    <tr>
        <td>{{ $cv->firstname }} {{ $cv->lastname }}</td>
        <td>{{ $cv->mobile }}</td>
        <td>{{ $statuses[$cv->status] }}</td>
        <td>{{ $cv->created_at }}</td>
        <th>Link</th>
    </tr>
    @endforeach
</table>
@endsection