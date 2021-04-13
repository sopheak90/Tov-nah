@extends('layouts.master')

@section('title')
Resgister
@endsection

@section('content')
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
                <h4 class="card-title"> Booking Hotel </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Hotel Booking</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Operation</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $i)
                            <tr>
                                <td>{{ $i->name}}</td>
                                <td>{{ $i->hotelName}}</td>
                                <td>{{ $i->checkin}}</td>
                                <td>{{ $i->checkout}}</td>
                                <td>{{ $i->amount}}</td>
                                <td>{{ $i->phonenumber}}</td>
                                <td>{{ $i->email }}</td>
                                <td><a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>

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
            $('#delete_model').attr('action', 'deleteHotelBooking/' + data[0]);
            $('#deleteModal').modal('show');
        });
    });
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>
@endsection