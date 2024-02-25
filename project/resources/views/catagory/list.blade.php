@extends('Admin_dasboard.layouts.master')

@section('content')

<section class="section">

    <div class="row">
        <div class="col-12 text-end mb-3">
            <a href="{{ url('/catagory') }}" style="float: right;"><button class="btn btn-primary">input Catagory</button></a>
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

                  <th scope="col">NAME</th>

                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($catagory as $item)


                <tr>
                  <th scope="row">{{ $loop->index+1}}</th>

                  <td>{{ $item-> Name}}</td>

                  <td>
                    <a href="{{ url('catagory/delete') }}/{{ $item->id }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{ url('catagory/edit') }}/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>


            <!-- End Default Table Example -->
@endsection
