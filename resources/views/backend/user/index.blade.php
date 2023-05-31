@extends('backend.layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data User</h5>
                            <a href="{{url('user-add')}}" class="btn btn-primary mb-2">Add</a>

                            <!-- Default Table -->
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data as $dt)
                                  <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$dt->name}}</td>
                                    <td>{{$dt->email}}</td>
                                    
                                    <td>
                                      <a href="{{url('user-edit')}}/{{$dt->id}}" class="btn btn-sm btn-success">Edit</a>
                                      <a onclick="return confirm('yakin hapus data?')" href="{{url('user-delete')}}/{{$dt->id}}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
