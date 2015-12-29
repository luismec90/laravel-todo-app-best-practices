@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <button style="margin-top: 20px;" class="btn btn-primary pull-right">Create a new task</button>
        <h1>To do list</h1>


        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
