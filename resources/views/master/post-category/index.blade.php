@extends('layouts.master')

@section('title')
    Category
@endsection

@section('content')
    <section class="content-header">

    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i>
                        {{ $message }}
                    </div>
                @endif
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="{{ route('post-category.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp; Create</a>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <div class="container-fluid">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="text-align: center;">Category Name</th>
                                            <th style="text-align: center;">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($post-category as $show)
                                            <tr>
                                                <th>{{ $show->name }}</th>
                                                <th>
                                                    <a href="{{ route('post-category.edit', $show->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                    <form action="{{ route('post-category.destroy', $show->id) }}" method="post">
                                                        @csrf
                                                        @method("delete")
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 