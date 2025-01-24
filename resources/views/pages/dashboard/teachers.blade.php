@extends('pages.dashboard.layout')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Teachers Information</h2>
        <div class="row">
            @foreach ($teacher as $t)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $t['name'] }}</h5>
                            <p class="card-text">Grade: {{ $t['grade'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
