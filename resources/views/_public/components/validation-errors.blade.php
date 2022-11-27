<div class="validation-errors">
    @if(!empty($errors))
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    @endif
</div>
