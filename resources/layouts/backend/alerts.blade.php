@if ($errors)
    <div class="alert alert-danger">
        <strong>Oops!</strong>
        - {!! implode($errors->all(), '<br>- ') !!}
    </div>
@endif
