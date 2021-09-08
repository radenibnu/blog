@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
            <a href="{{ route('home.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Add News</span>
            </a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Author</th>
                             <th>Content</th>
                             <th>Image</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($news as $new)
                        <tr>
                            <td> {{ $loop->iteration}}</td>
                            <td> {{$new->author}}</td>
                            <td> {{$new->content}}</td>
                            <td> <img src="{{ asset($new->image) }}" alt="" width="50"></td>
                            <td>
                                <form action="{{ route('home.destroy', $new->id) }}" method="POST">
                                    <a href="{{ route('home.show', $new->id) }}" type="" class=""><input type="button" class="btn btn-success btn-sm" value="View"></a>
                                    <a href="{{route('home.edit', $new->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                       Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            <strong> Oopps ! </strong> Data kosong
                          </div>
                        @endforelse
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
</div>
@endsection
