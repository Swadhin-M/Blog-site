@extends('Admin_dasboard.layouts.master')

@section('content')



<section class="section">
    <div class="row">
        <div class="col-12 text-end mb-3">
            <a href="{{ url('/input') }}" style="float: right;"><button class="btn btn-primary">new content</button></a>
        </div>
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Content Data Table</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">PHOTO</th>
                  <th scope="col">CATAGORY</th>
                  <th scope="col">NAME</th>
                  <th scope="col">HEAD</th>
                  <th scope="col">DATE</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($content as $item)


                <tr>
                  <th scope="row">{{ $loop->index+1}}</th>
                  <td><img src="{{asset('photo/'.$item->photo)  }}" alt="photo" width="50px"></td>
                  <td>{{ $item->blogCatagory->Name}}</td>
                  <td>{{ $item-> name}}</td>
                  <td>{{ $item-> head}}</td>
                  <td>{{ $item-> date}}</td>
                  <td>
                    <a href="{{ url('delete') }}/{{ $item->id }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{ url('update') }}/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>

            {{--  <style>
                .section{
                    margin-left: 350px;
                    margin-top: 100px;
                    width: 90%;
                }
            </style>  --}}
            <!-- End Default Table Example -->
@endsection
