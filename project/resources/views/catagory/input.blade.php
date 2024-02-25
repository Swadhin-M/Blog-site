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
        <a href="{{ url('/catagory/list') }}" style="float: right; margin-right: 5px"><button class="btn btn-primary">list Catagory</button></a>
    </div>
<div class="story-form-container">
  <h2>Share Your Story</h2>
  <form action="{{ url('/catagory') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="name">Catagory-Name:</label>
      <input type="text" id="name" name="Name" required>
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

@media screen and (max-width: 600px) {
    form {
      width: 90%;
    }
  }

  @media screen and (max-width: 400px) {
    form {
      width: 100%;
    }
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

