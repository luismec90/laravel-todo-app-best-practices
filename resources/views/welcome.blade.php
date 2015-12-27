@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-xs-12">
                <h1>Todo List</h1>
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-stripped">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Test
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
