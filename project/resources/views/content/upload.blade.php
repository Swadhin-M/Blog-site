
@extends('Admin_dasboard.layouts.master')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Story Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="col-12 text-end mb-3">
        <a href="{{ url('/list') }}" style="float: right; margin-right: 5px"><button class="btn btn-primary">list content</button></a>
    </div>

<div class="story-form-container">

  <h2>Share Your Story</h2>
  <form action="{{$url }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

      <label for="photo">Photo: <img src="{{asset('photo/'.$content->photo)  }}" alt="photo" width="70px; "></label>
      <input type="file" id="photo" name="photo" accept="image/*">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required  value="{{ $content->date }}">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required value="{{ $content->name }}">
    </div>
    <div class="form-group">
      <label for="story">Story:</label>
      {{--  <input type="text" id="story" name="story" rows="5" required  value="{{ $content->story }}">  --}}
      <textarea name="story" id="story" cols="30" rows="10">{{ $content->story }}</textarea>
    </div>
    <div class="form-group">
        <select class="form-select" name="catagory_id" aria-label="Default select example">
        <option value="" hidden>Choice</option>
        @foreach ($gallary as $item)
        <option value="{{ $item->id }}" >{{ $item->Name }}</option>
        @endforeach
        </select>
        </div>
    <div class="form-group">
      <label for="head">Headline:</label>
      <input type="text" id="head" name="head" required  value="{{ $content->head }}">
    </div>
    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>





<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.story-form-container {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 400px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
textarea,
button,
input[type="file"] {
  width: 100%;
  padding: 8px;
  font-size: 16px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-top: 5px;
}

textarea {
  resize: vertical;
}

button {
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}



</style>

@endsection
