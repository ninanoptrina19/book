@extends('layouts/app')

@section('title', 'Admin - List Book')
    
@section('content')

<div class="content-wrapper">
    <h3 class="pl-5">Book Management</h3>
    <!-- ROW -->
    
    <!-- END SECTION ADD BOOK -->
</div>
<h5>{{$book->judul}}</h5>
<h6>{{$book->penulis}}</h6>
<p>{{$book->penerbit}}</p>
<span class="badge badge-primary">{{$book->tahun}}</span>


@endsection