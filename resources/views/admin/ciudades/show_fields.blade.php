<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $ciudades->id !!}</p>
</div>

<!-- Ciudad Field -->
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    <p>{!! $ciudades->ciudad !!}</p>
</div>

<!-- Depto Id Field -->
<div class="form-group">
    {!! Form::label('depto_id', 'Depto Id:') !!}
    <p>{!! $ciudades->depto_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $ciudades->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $ciudades->updated_at !!}</p>
</div>

