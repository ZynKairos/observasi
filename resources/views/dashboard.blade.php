@extends('master.tamplate')
@section('navigasi')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ ('/') }}"><i class="fa fa-home"></i> Home</a></li>
        </ol>
    </nav>
@endsection
@section('konten')
    <div class="table-responsive text-nowrap">
        <div class="navbar-nav align-items-center float-end mb-4">
            <form action="" method="get">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input name="search" type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                        aria-label="Search..." />
                    <div class="mb-3 mt-3 ">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nim</th>
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
                                    <h5 class="modal-title" id="{{ 'id' . $item->id }}">Data {{ $item->nama_buku }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-4">
                                        <p>
                                        <ul>
                                            <li>Nim : {{ $item->kode }}</li>
                                            <li>Mahasantri : {{ $item->kategori }}</li>
                                            <li>Kelas : {{ $item->nama_buku }}</li>
                                            <li>Dosen : {{ $item->penerbit_id }}</li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td> <strong>{{ $no++ }}</strong></td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->nama_buku }}</td>
                        @foreach ($penerbit as $bit)
                            <td>{{ $item->penerbit_id == $bit->id ? $bit->nama : '' }}</td>
                        @endforeach
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
