@extends('admin.layout')

@section('content')
    <h3>Contact Details</h3>

    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong><br>{{ $contact->message }}</p>

    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
