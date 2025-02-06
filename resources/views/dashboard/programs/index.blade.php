@extends('dashboard.layouts.layout')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Programs</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive small col-lg-8">
        <a href="/dashboard/programs/create" class="btn btn-primary mb-3">Create new program</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">URL Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $program)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $program->title }}</td>
                        <td>{{ $program->kategori->nama }}</td>
                        <td>{{ $program->url_link }}</td>
                        <td>
                            {{-- <a href="/dashboard/programs/{{ $program->slug }}" class="badge bg-info">
                                <span class="bi bi-eye"></span></a> --}}
                            <a href="/dashboard/programs/{{ $program->slug }}/edit" class="badge bg-warning">
                                <span class="bi bi-pencil-square"></span></a>
                            <form action="/dashboard/programs/{{ $program->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger" onclick="return confirm ('Are you sure?')"><span
                                        class="bi bi-trash3"></span></button>

                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
