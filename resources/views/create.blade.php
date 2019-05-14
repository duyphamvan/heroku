
<html lang="en">
<head>
    <title>Laravel Multiple File Upload Example</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="jumbotron">Laravel Multiple File Upload</h3>
    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="input-group control-group increment" >
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
        <div class="input-group control-group increment" >
            <input type="email" name="email" class="form-control" placeholder="email">
        </div>

        <div class="input-group control-group increment" >
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>

        <div class="input-group control-group increment" >
            <input type="file" name="image[]" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
    </form>
</div>

</body>
</html>
