<table class="table table-responsive" id="ciudades-table">
    <thead>
        <th>Ciudad</th>
        <th>Depto Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ciudades as $ciudades)
        <tr>
            <td>{!! $ciudades->ciudad !!}</td>
            <td>{!! $ciudades->depto_id !!}</td>
            <td>
                {!! Form::open(['route' => ['ciudades.destroy', $ciudades->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ciudades.show', [$ciudades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ciudades.edit', [$ciudades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>