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

                            <form method="POST" action="{{url('assets-update')}}" enctype="multipart/form-data">
                                {{-- ;arabel memerlukan code akses untuk mengirimkan data menggunakan method oist --}}
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Assets</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_Assets" value="{{$data->nama_Assets}}" class="form-control">
                                    </div>
                                </div>

                                

                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="gambar" class="form-control">
                                        <img src="{{asset('storage/' . $data->gambar)}}" width="250" alt="">
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="" name="status">
                                            <option value="1" {{$data->status == '1' ? 'selected' : ''}}>Publish</option>
                                            <option value="0" {{$data->status == '0' ? 'selected' : ''}}>Not Publish</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
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
