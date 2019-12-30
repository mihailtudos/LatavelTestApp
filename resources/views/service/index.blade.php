
@extends('app')
@section('title', 'Services')



@section('content')
<div class="container">
    <form action="/service" method="POST" autocomplete="off">
        <label for="name"> Create Service <br>
            <input type="text" name="name" id="name"> <br>
        </label><br>
        @csrf
        <button>Create service</button>
    </form>
    @error('name') {{$message}} @enderror
</div>
    <ul>
        @forelse ($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <li>No services available</li>
        @endforelse
    </ul>
@endsection


