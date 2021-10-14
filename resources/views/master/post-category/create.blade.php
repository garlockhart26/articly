@extends('layouts.master')

@section('title')
Create Post Category
@endsection

@section('content')
<section class="content-header">

</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-check"></i>
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Create Post Category</b></h3>
                </div>

                <form action="{{ route('post-category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="box-body">
                        <div class="row form-group">
                            <label for="title" class="col-sm-2">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Example : " require>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="description" class="col-sm-2">Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Example : " require>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="image" class="col-sm-2">Meta Description</label>
                            <div class="col-sm-10">
                                <input type="text" id="meta_desc" name="meta_desc" class="form-control" placeholder="Example : " require>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <div class="pull-right">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection