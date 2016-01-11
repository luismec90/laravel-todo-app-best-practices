@extends('layouts.app')

@section('content')

    <div class="container spark-screen">
        <a id="create-task" style="margin-top: 20px;" class="btn btn-primary pull-right">Create a new task</a>
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
                                <label for="exampleInputEmail1">Task</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Go to the supermarket">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Notes</label>
                                <textarea class="form-control" id="notes" name="notes"
                                          placeholder="Buy milk, meat and eggs."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


    </div>

@endsection
