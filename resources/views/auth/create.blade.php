<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Apellido:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::input('email','email',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('doc_id', 'Cédula:') !!}
    {!! Form::text('doc_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('birthday', 'Fecha de Nacimiento:') !!}
    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('size', 'Talla:') !!}
    {!! Form::select('size', array('SS' => 'SS',
                                   'S' => 'S',
                                   'M' => 'M',
                                   'L' => 'L',
                                   'XL' => 'XL',
                                   'XXL' => 'XXL',
                                   'Otro' => 'Otro'),
                                   ['class' => 'form-control']) !!}
</div>
<div class="form-group col-xs-12">
    {!! Form::label('address', '*Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control required']) !!}
</div>
<div class="form-group col-xs-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-xs-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-xs-12">
    <h2>Tipo:</h2>
    {!! Form::radio('recipe_type','Postre') !!} <span style="padding-right: 25px">Postre</span>
    {!! Form::radio('recipe_type','Salado') !!} <span style="padding-right: 25px">Salado</span>
</div>
<div class="form-group">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>