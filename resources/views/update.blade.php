@extends('layout/bloglayout')
@section('title')
    Edit Post
@endsection
@section('topcontent')
<form action="{{route("posts.update",$post->id)}}" method="post">
  @csrf
  @method("put")
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">ID</label>
      <input name="id" value={{ $post->id }} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled/>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">Title</label>
      <input name="title" value={{ $post->title }} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">Description</label>
      <textarea name="discription"  id="" cols="30" rows="5" class="form-control">{{ $post->discription }}</textarea>
    </div>
    <div class="mb-3">
      <select value="{{$post->user_id}}" class="form-control" aria-label="Default select example" name="user">
        @foreach ($users as $user)
        @if ($user->id == $post->user_id)
        <option selected value="{{$user->id}}">{{$user->name}}</option>
        @else
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endif
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>
@endsection