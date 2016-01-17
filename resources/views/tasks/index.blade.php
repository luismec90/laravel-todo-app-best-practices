@extends('layouts.app')

@section('content')

    <div class="container spark-screen">
        <a id="create-task" style="margin-top: 20px;" class="btn btn-primary pull-right">Create a new task</a>
        <h1>To do list</h1>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm edit-task">Edit</button>
                        <button class="btn btn-danger btn-sm delete-task">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


        <div class="modal fade" id="modal-create-task">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Create task</h4>
                    </div>
                    <form action="{{ route('store_task_path') }}" method="post" class="" role="form">
                        {!! csrf_field() !!}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Go to the supermarket">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                          placeholder="Buy milk, meat and eggs."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <div class="modal fade" id="modal-edit-task">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Edit task</h4>
                    </div>
                    <form action="{{ route('store_task_path') }}" method="post" class="" role="form">
                        {!! csrf_field() !!}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Go to the supermarket">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                          placeholder="Buy milk, meat and eggs."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="modal-delete-task">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Delete task</h4>
                    </div>
                    <form action="{{ route('store_task_path') }}" method="post" class="" role="form">
                        {!! csrf_field() !!}
                        <div class="modal-body">
                            <p>Are you sure to dele this task?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


    </div>

@endsection
