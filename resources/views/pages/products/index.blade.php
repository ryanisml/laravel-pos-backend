@extends('layouts.app')

@section('title', 'Table')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tables</h2>
            <p class="section-lead">
                Examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.
            </p>
            <div class="col-12">
                @include('layouts.alert')
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Bordered</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
                            </div>
                            <div class="clearfix mb-3"></div>
                            <form method="GET" action="{{ route('products.index') }}">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request()->get('search') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table-bordered table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $row)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td scope="row">{{ $row->category }}</td>
                                        <td scope="row">{{ $row->name }}</td>
                                        <td scope="row">Rp{{ number_format($row->price, 2, ",", ".") }}</td>
                                        <td scope="row">{{ $row->stock }}</td>
                                        <td scope="row">{{ \Carbon\Carbon::parse($row->created_at)->format('d F Y') }}</td>
                                        <td scope="row">
                                            <a href="{{ route('products.edit', $row) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('products.destroy', $row) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush