<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Depto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('depto_id', 'Depto Id:') !!}
    {!! Form::number('depto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ciudades.index') !!}" class="btn btn-default">Cancel</a>
</div>
