@extends('pages.dashboard.layout')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Students List</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['grade'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
