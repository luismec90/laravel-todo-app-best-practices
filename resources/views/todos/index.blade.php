@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <h1>Todo List</h1>
        <button class="btn btn-primary pull-right">Create a new task</button>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->name }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
