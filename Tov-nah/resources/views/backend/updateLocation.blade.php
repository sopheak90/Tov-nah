<!DOCTYPE html>
<html>
    <head>
        <title>Insert Information | {{$data['name']}}</title>
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
    <h1 align="center">Update Location Information</h1>
    <form action="{{ route('updateLocation')}}" method="POST" class="x1" id="nameform">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">

        <div class="form-group">
            <label for="name">Place Name:</label>
            <input type="text" class="form-control" name="name" value="{{$data['name']}}" required>
        </div>

        <div class="form-group">
            <label for="price"> Khmer Price: </label>
            <input type="text" class="form-control" id="khmerprice" name="khmerprice" value="{{$data['khmerprice']}}" required>
        </div>

        <div class="form-group">
            <label for="price">Foriegner Price</label>
            <input type="text" class="form-control" id="Foreignprice" name="foriegnprice" value="{{$data['foriegnprice']}}" required>
        </div>        
        <div class="form-group">
            <label for="estimate">Estimate Price</label>
            <input type="text" class="form-control" id="estimate" name="estimate" value="{{$data['estimate']}}" required>
        </div> 
        
            
        <div class="form-group">
            <label for="description">Description </label>
            <textarea class="form-control" id="summary-ckeditor" name="description">{{$data['description']}}</textarea>
        </div>  


        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$data['image']}} placeholder=" placeholder="URL of Image" required>
        </div> 
       
        <br>
        <button type="submit" class="btnSubmit btn-warnning " form="nameform">Update</button>        

    </form>

   
    </body>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'summary-ckeditor' );
</script>
</html>