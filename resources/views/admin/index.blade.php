@extends('layouts.admin')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Avatar</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                <img src="{{ $user->avatar }}" width="20%" height="20%" style="border-radius: 50%;">
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="d-flex justify-content-end">
                                <a href="{{ route('admin.user.details', $user->id) }}" class="mr-1 btn btn-outline-primary btn-sm">Edit</a>
                                <a href="{{ route('admin.delete.user', $user->id) }}" class="ml-1 btn btn-outline-danger btn-sm" onclick="event.preventDefault();
                                                     document.getElementById('logout-form-{{ $user->id }}').submit();">Delete</a>
                                    <form id="logout-form-{{ $user->id }}" action="{{ route('admin.delete.user', $user->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">You do not have any users yet</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
