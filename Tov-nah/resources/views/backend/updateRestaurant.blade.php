<!DOCTYPE html>
<html>
    <head>
        <title>Update | {{$data['name']}}</title>
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
    <h1 align="center">Insert Restaurant Information</h1>
    <form action="{{ route('updateRestaurant')}}" method="POST" class="x1" id="nameform">
        @csrf

        <div class="form-group">
            <input type="hidden" name="id" value="{{$data['id']}}">
            <label for="name">Restaurant Name:</label>
            <input type="text" class="form-control" name="name" required value="{{$data['name']}}">
        </div>

        <div class="form-group">
            <label for="price"> Restaurant Location </label>
            <input type="text" class="form-control"  name="location" required value="{{$data['location']}}">
        </div>

        <div class="form-group">
            <label for="price"> Amount of People: </label>
            <input type="text" class="form-control"  name="amount_of_people" required value="{{$data['amount_of_people']}}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control"  name="price" required value="{{$data['price']}}">
        </div>        
               
        <div class="form-group">
            <label for="description">Description </label>
            <textarea class="form-control" id="summary-ckeditor" name="description">{{$data['description']}}</textarea>
        </div> 

        
        <div class="form-group">
            <label for="description">Restaurant Type</label>
            <input type="text" class="form-control" id="estimate" name="type" required value="{{$data['type']}}">
        </div>  

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="URL of image" required value="{{$data['image']}}">
        </div> 
       
        <br>

        <button type="submit" class="btnSubmit" form="nameform">Submit</button>
    </form>
   
    </body>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'summary-ckeditor' );
</script>
</html>