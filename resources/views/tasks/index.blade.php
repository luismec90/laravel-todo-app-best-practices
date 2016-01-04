@extends('layouts.app')

@section('content')

    <div class="container spark-screen">
        <button id="create-task" style="margin-top: 20px;" class="btn btn-primary pull-right">Create a new task</button>
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
        				<h4 class="modal-title">Modal title</h4>
        			</div>
        			<div class="modal-body">
        				Modal body ...
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Save changes</button>
        			</div>
        		</div><!-- /.modal-content -->
        	</div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


    </div>

@endsection
