@extends('Admin_dasboard.layouts.master')

@section('content')


<section class="section">
    <div class="row">
        <div class="col-12 text-end mb-3">
            <a href="{{ url('/setting') }}" style="float: right;"><button class="btn btn-primary">Input Settings</button></a>
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
                  <th scope="col">LOGO</th>
                  <th scope="col">FACEBOOK</th>
                  <th scope="col">GOOGLE</th>
                  <th scope="col">INSTAGRAM</th>
                  <th scope="col">TWITER</th>
                  {{--  <th scope="col">ABOUT</th>  --}}
                  <th scope="col">Contact-Number</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Address</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($setting as $item)


                <tr>
                  <th scope="row">{{ $item-> id}}</th>
                  <td><img src="{{asset('logo/'.$item->logo)  }}" alt="" width="50px"></td>
                  <td>{{ $item-> facebook}}</td>
                  <td>{{ $item-> google}}</td>
                  <td>{{ $item-> instagram}}</td>
                  <td>{{ $item-> twiter}}</td>
                  {{--  <td>{{ $item-> about}}</td>  --}}
                  <td>{{ $item-> contect_number}}</td>
                  <td>{{ $item-> email}}</td>
                  <td>{{ $item-> address}}</td>

                  <td>
                    <a href="{{ url('setting/delete') }}/{{ $item->id }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{ url('setting/edit') }}/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>

            {{--  <style>
                .section{
                    margin-left: 350px;
                    margin-top: 100px;
                    width: 100%;
                }
            </style>  --}}
            <!-- End Default Table Example -->
@endsection
