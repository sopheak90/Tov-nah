@extends('layouts.master')

@section('title')
Resgister
@endsection

@section('content')
<!-- addUser -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD NEW USER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/create" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name: </label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email: </label>
                        <input type="text" name="email" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Phone: </label>
                        <input type="number" name="phone" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password: </label>
                        <input type="password" name="password" class="form-control" id="recipient-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD NOW</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- deleteUSer -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
            </div>
            <form id="delete_model" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="modal-body">
                    <h4 style="color:rgb(255,184,24);"> Are You Sure want to delete ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Register Roll
                    <button type="button" style="float:right;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">ADD</button>
                </h4>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table" style="width:100%">
                        <thead class=" text-primary">
                            <th>
                                id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Roll
                            </th>
                            <th>
                                Phone(+855)
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Account Create
                            </th>
                            <th>
                                Last update
                            </th>
                            <th>
                            </th>
                            <th>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($users as $row)

                            <tr>
                                <td>
                                    {{$row->id}}
                                </td>
                                <td>
                                    {{$row->name}}
                                </td>
                                <td>
                                    {{$row->roll}}
                                </td>
                                <td>
                                    {{$row->phone}}
                                </td>
                                <td>
                                    {{$row->email}}
                                </td>
                                <td>
                                    {{$row->created_at}}
                                </td>
                                <td>
                                    {{$row->updated_at}}
                                </td>
                                <td>
                                    <a href="{{"/edit/".$row['id']}}" class="btn btn-success">Edit</a>
                                    <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->


@endsection

@section('scripts')
<script script src="https://code.jquery.com/jquery-3.5.1.js">
</script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();

        $('#dataTable').on('click', '.deletebtn', function() {
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            $('#delete_id').val(data[0]);
            $('#delete_model').attr('action', '/deleteHotel/' + data[0]);
            $('#deleteModal').modal('show');
        });
    });
</script>
@endsection