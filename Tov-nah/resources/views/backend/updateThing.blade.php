<!DOCTYPE html>
<html>
    <head>
        <title>Update | {{$data->name}} </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .x1{
                margin-right: 30%;
                margin-left: 30%;
            }

            .btnSubmit
            {
                border:none;
                border-radius:1.5rem;
                padding: 1%;
                width: 20%;
                cursor: pointer;
                background: #0062cc;
                color: #fff;
            }
        </style>
    </head>
    <body>
    <h1 align="center">Edit Thing to do</h1>
    <form action="{{ route('updateThing') }}" method="post" class="x1" id="nameform">
        @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="form-group">
                <label for="name">Place Name:</label>
                <input type="text" class="form-control" name="name" value="{{$data['name']}}" required >
            </div>
    
                  
            <div class="form-group">
                <label for="description">Description </label>
                <textarea class="form-control" id="summary-ckeditor" name="description">{{$data['description']}}</textarea>
            </div>        

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="URL of image"  value="{{$data['image']}}" required >
            </div> 
            <button type="submit" class="btnSubmit" form="nameform">Update</button>

           
        </form>
    </body>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'summary-ckeditor' );
</script>
</html>
