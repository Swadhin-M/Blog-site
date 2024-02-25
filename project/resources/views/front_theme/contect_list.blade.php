@extends('Admin_dasboard.layouts.master')

@section('content')

<div class="">
    @if(session()->has('message'))
        {{session()->get('message')}}
    @else

    @endif
</div>
<section class="section">
    <div class="row">
        <div class="col-12 text-end mb-3">
            <a href="{{ url('/contect') }}" style="float: right;;"><button class="btn btn-primary">input message</button></a>
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
                  <th scope="col">FULL NAME</th>
                  <th scope="col">E-MAIL</th>
                  <th scope="col">SUBJECT</th>
                  <th scope="col">MESSAGE</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contect as $item)


                <tr>
                  <th scope="row">{{ $loop->index+1}}</th>
                  <td>{{ $item->full_name }}</td>
                  <td>{{ $item-> email}}</td>
                  <td>{{ $item-> subject}}</td>
                  <td>{{ $item-> massage}}</td>
                  <td>
                    <a href="{{ url('contect/delete') }}/{{ $item->id }}"><button class="btn btn-danger">Delete</button></a>
                    {{--  <a href="{{ url('update') }}/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a>  --}}
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>


            <!-- End Default Table Example -->
@endsection
