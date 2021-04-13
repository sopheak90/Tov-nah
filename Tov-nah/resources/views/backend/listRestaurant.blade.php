@extends('layouts.master')

@section('title')
Location List
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD NEW RESTAURANT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('insertRestaurant')}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name: </label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">location: </label>
                        <input type="text" name="location" class="form-control" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Amount of People: </label>
                        <input type="text" name="amount_of_people" class="form-control" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Price: </label>
                        <input type="text" name="price" class="form-control" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Type: </label>
                        <input type="text" name="type" class="form-control" id="recipient-name">
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">image: </label>
                        <input type="text" name="image" class="form-control" id="recipient-name" placeholder="URL Of Image">

                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Rating: </label>
                        <input type="text" name="rating" class="form-control" id="recipient-name">
                    </div>


                    <div class="mb-3">
                        <label for="summary-ckeditor" class="col-form-label">Description: </label>
                        <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Insert Now</button>
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
                <h4 class="card-title"> Hotel list
                    <button type="button" style="float:right;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">ADD</button>
                </h4>

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="card-body">
                    <table id="dataTable" class="table" style="width:100%">
                        <form action="/listRestaurant']}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Restarant Name</th>
                                    <th>Price</th>
                                    <th>type</th>
                                    <th>Location</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $i)
                                <tr>
                                    <td>{{$i['id']}}</td>
                                    <td>{{$i['name']}}</td>
                                    <td>{{$i['price']}}</td>
                                    <td>{{$i['type']}}</td>
                                    <td>{{$i['Location']}}</td>
                                    <td>
                                        <a href={{"updateRestaurant/" . $i['id']}}> <button type="button" class="btn btn-success">Edit</button> </a>
                                        <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



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
            $('#delete_model').attr('action', 'deleteRestaurant/' + data[0]);
            $('#deleteModal').modal('show');
        });
    });
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>
@endsection