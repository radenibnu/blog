@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Input News</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('home.store')}}"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" id="author">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Add</button>
                        <a href="#" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection

