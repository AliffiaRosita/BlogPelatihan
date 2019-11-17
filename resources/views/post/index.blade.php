@extends('template.master')
@section('content')

<div class="row mt-5">
    <div class="col-9">
        <h3 >DATA POSTINGAN</h3>
    </div>
    <div class="col-3 ">
    <a href="{{route('post.create')}}" class="btn btn-success mb-2 float-right" ><i class="fa fa-plus"></i> Tambah Post</a>
    </div>
</div>

<table class="table table-striped">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($postss as $item)
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{str_limit($item->description)}}</td>
            <td><a href="{{route('post.edit',['id'=>''])}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                <a href="{{route('post.show',['id'=>''])}}" class="btn btn-primary"> <i class="fa fa-eye"></i></a>
                <form action="" class="d-inline" method="POST">
                    @method('DETELE')
                    <button class="btn btn-danger" type="submit"> <i class="fa fa-trash"></i></button>
                </form></td>
        @endforeach

    </tbody>

</table>
{{-- @include('post._modal') --}}




@endsection
