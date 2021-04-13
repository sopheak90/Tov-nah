@extends('layouts.master')

@section('title')
Resgister
@endsection
<style>
    span {
        color: hsl(193, 80, 32);
        font-weight: bold;
        font-size: 1.3rem;
    }

    .text {
        color: hsl(197, 77, 20);
        font-size: 1rem;
    }
</style>
@section('content')
<!-- Modal -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Email Contact </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table" style="width:100%">
                        <thead class=" text-primary">
                            <th>
                                Email
                            </th>
                            <th>
                                Messgae
                            </th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($users as $row)
                            <tr>
                                <td>
                                    {{$row->email}}
                                </td>
                                <td>
                                    {{$row->message}}
                                </td>
                                <td>
                                    <a href="{{$row->id}}" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        view
                                    </a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/contact-admin/{{$row->id}}" method="post">
                    <span>Name</span> : <span class="Text">{{$row->name}}</span> <br>
                    <span>Email</span> : <span class="Text">{{$row->email}}</span> <br>
                    <span>Message</span> : <span class="Text">{{$row->message}}</span> <br>
                    <span>Send date</span> : <span class="Text">{{$row->created_at}}</span>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Done</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

