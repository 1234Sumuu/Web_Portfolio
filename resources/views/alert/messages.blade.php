<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close btn-xl" data-dismiss="modal"><span>&times;</span><span class="sr-only">Close</span></button>
            {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
            <strong>Error!</strong>{{$error}}
        </div>
    @endforeach
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close btn-xl" data-dismiss="alert">&times;</button>
        <strong>Error!</strong>{{session('error')}}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close btn-xl" data-dismiss="alert">&times;</button>
        <strong>Success!</strong>{{session('success')}}
    </div>
@endif
