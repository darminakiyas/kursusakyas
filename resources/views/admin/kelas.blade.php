@extends('admin.layouts.main')
@section('container')
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <a href="" class="btn btn-primary">+</a>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Status</th>

                            <th><i class="bi bi-three-dots-vertical"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $kls)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kls->kelas }}</td>
                                <td>{{ $kls->status }}</td>

                                <td>
                                    <a href="/tutor/{{ $kls->slug }}" class="btn btn-info">
                                        <i class="fas fa-eye"></i></a>
                                    <a href="/tutor/{{ $kls->slug }}/edit" class="btn btn-warning"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="/tutor/{{ $kls->slug }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger "><i
                                                class="fas fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
@endsection
