@extends('admin.layouts.app_admin')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="jumbotron">
                        <p><span class="label label-primary">Categories 0</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="jumbotron">
                        <p><span class="label label-primary">Articles 0</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="jumbotron">
                        <p><span class="label label-primary">Users 0</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="jumbotron">
                        <p><span class="label label-primary">Users Today 0</span></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <a class="btn btn-block btn-default" href="#">Create Category</a>
                    <a class="list-group-item" href="#">
                        <h4 class="list-group-item-heading">Category one</h4>
                        <p class="list-group-item-text">
                            Number Categories
                        </p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a class="btn btn-block btn-default" href="#">Create Article</a>
                    <a class="list-group-item" href="#">
                        <h4 class="list-group-item-heading">Article one</h4>
                        <p class="list-group-item-text">
                            Number Articles
                        </p>
                    </a>
                </div>
            </div>
        </div>
    @endsection