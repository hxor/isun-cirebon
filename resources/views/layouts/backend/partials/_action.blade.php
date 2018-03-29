@if (!empty($form_url))

    {!! Form::model($model, ['url' => $form_url, 'method' => 'delete']) !!}

    @if(!empty($show_url) && !empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-outline-info btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Show</a>
        <a href="{{ $edit_url }}" class="btn btn-outline-secondary btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Edit</a>

    @elseif(empty($show_url) && !empty($edit_url))

        <a href="{{ $edit_url }}" class="btnbtn-outline-secondary btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Edit</a>

    @elseif(!empty($show_url) && empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-outline-info btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Show</a>

    @endif

    <button type="submit" class="btn btn-outline-danger btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Delete</button>

    {!! Form::close() !!}

@else

    @if(!empty($show_url) && !empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-outline-info btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Show</a>
        <a href="{{ $edit_url }}" class="btn btn-outline-secondary btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Edit</a>

    @elseif(empty($show_url) && !empty($edit_url))

        <a href="{{ $edit_url }}" class="btn btn-outline-secondary btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Edit</a>

    @elseif(!empty($show_url) && empty($edit_url))

        <a href="{{ $show_url }}" class="btn btn-outline-info btn-sm" style="padding-top: 1px;padding-bottom: 1px;">Show</a>

    @endif

@endif
