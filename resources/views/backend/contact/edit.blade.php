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

                            <!-- General Form Elements -->
                            <form method="POST" action="{{url('contact-update')}}">
                                {{-- ;arabel memerlukan code akses untuk mengirimkan data menggunakan method oist --}}
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" value="{{$data->email}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Plan</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" name="plan" class="form-control" value="{{$data->plan}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Project" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="project_date" class="form-control" value="{{$data->project_date}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
