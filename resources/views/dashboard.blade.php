@extends('app')

@section('content')

    <!-- Simple usage -->
    @can('edit')
        <p>This section is only for someone who have Edit permission.
        <p>Your role is {{ $role }}</p>
    @endcan

    @role('admin')
        <p>Your role is {{ $role }}</p>
        <p>Here is some users activity</p>
        <ul>
            <li>{{ $activity }}</li>
        </ul>
    @endrole
@endsection