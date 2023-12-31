@extends('private.layouts.admin.template')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Image</h1>
        </div>
    </div>
    <div class="row">
        @include('includes.admin.alerts')
        <div class="col-md-12">
            {{Form::open(['url' => route("gallery.store"), 'method' => 'POST','files'=>true])}}
            @include('private.admin.gallery.form')
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
            {{Form::close()}}
        </div>

    </div>

@endsection

