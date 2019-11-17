@extends('template.master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
            <h3>Terjadi Kesalahan</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card border-primary">
    <div class="card-header bg-primary text-white">
        <h3 class="text-center"><i class="fa fa-plus"></i> Tambah Post</h3>
    </div>
    <div class="card-body text-center">
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="title" class="">Title</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="desc">Description</label>
                    </div>
                    <div class="col-8">
                        <textarea name="description" id="desc" class="form-control"></textarea>
                    </div>
                </div>


        <div class="row mt-2">
            <div class="col-4">
                <label for="author">Author</label>
            </div>
            <div class="col-8">
                <select name="user_id" id="author" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-5 mt-5 justify-content-center">
            <div class="col-6 ">
                <button type="reset" class="btn btn-danger"> Reset</button>
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
        </div>
            </div>


</form>
</div>
</div>

@endsection
