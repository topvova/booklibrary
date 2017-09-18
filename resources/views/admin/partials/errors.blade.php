@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger alert-dismissable">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> {{$error}}!
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif