@extends('master.tamplate')
@section('navigasi')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ ('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Mahasantri </li>
        </ol>
    </nav>
@endsection
@section('konten')
    <div class="table-responsive text-nowrap">
        <div class="navbar-nav align-items-center float-end mb-4">
                <div class="nav-item d-flex align-items-center">
                    <div class="mb-3 mt-3 ">
                        <a href="{{ route('buku.create') }}"><button class="btn btn-primary" type="submit">Tambah Data Mahasantri <i class="bx bx-plus"></i></button></a>
                    </div>
                </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama Mahasantri</th>
                    <th>Kelas</th>
                    <th>Dosen</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $item)
                    <div class="modal fade" id="{{ 'id' . $item->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="{{ 'id' . $item->id }}">Data : <span class="text-primary">{{ $item->nama_buku }}</span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-4">
                                        <p>
                                        <ul>
                                            <li>NIM : {{ $item->kode }}</li>
                                            <li>Nama Mahasantri : {{ $item->kategori }}</li>
                                            <li>Kelas : {{ $item->nama_buku }}</li>
                                            <li>{{ $item->penerbit->nama }}</li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td> <strong>{{ $no++ }}</strong></td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->nama_buku }}</td>
                        <td>{{ $item->penerbit->nama }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('buku.edit', $item->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <button class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="{{ '#id' . $item->id }}"><i
                                            class="bx bx-pencil me-1"></i>Detail</button>
                                    <form action="{{ route('buku.destroy', $item->id) }}" method="GET">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('Are you sure??')"><i class="bx bx-trash me-1"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
