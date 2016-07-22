<!--Nombre receta -->
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('nombreReceta', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-7">
                {!! Form::text('nombreReceta', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('ing', 'Ingrediente', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-7">
                {!! Form::text('ing', null, ['class' => 'form-control', 'placeholder'=>'e.g. ']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-offset-2">
        <button type="button" class="btn btn-default" id="agregar">Agregar</button>
        <button type="button" class="btn btn-default" id="eliminar">Eliminar</button>
    </div>
</div>
<div class="row">
    <div class="col-md-6">

    </div>
</div>
<div class="lista">
    <ul id="ings" >

    </ul>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('ingredientes', 'Ingredientes', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
                {!! Form::textarea('ingredientes', null, ['class' => 'form-control', 'placeholder'=>'Ingredientes', 'readonly']) !!}
            </div>
        </div>
    </div>
</div>

<!--Preparacion-->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('preparacion', 'Preparacion', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
                {!! Form::textarea('preparacion', null, ['class' => 'form-control', 'placeholder'=>'Preparacion']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('raciones', 'Raciones', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-4">
                {!! Form::text('raciones', null, ['class' => 'form-control', 'placeholder'=>'Raciones']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('modalidad', 'Modalidad', ['class' => 'col-md-4 control-label']) !!}
            {!! Form::radio('modalidad','Postre') !!} <span style="padding-right: 25px">Postre</span>
            {!! Form::radio('modalidad','Salado') !!} <span style="padding-right: 25px">Salado</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('imagen', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::file('image', null, ['class' => 'form-control btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('alergenicos', 'Alergénicos', ['class' => 'col-md-4 control-label']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Huevo:') !!}
            {!! Form::checkbox('huevo', 1) !!}
            <br>
            {!! Form::label('Pescado:') !!}
            {!! Form::checkbox('pescado', 1) !!}
            <br>
            {!! Form::label('Leche:') !!}
            {!! Form::checkbox('leche', 1) !!}
            <br>
            {!! Form::label('Mani:') !!}
            {!! Form::checkbox('mani', 1) !!}
            <br>
            {!! Form::label('Mariscos:') !!}
            {!! Form::checkbox('mariscos', 1) !!}
            <br>
            {!! Form::label('Soya:') !!}
            {!! Form::checkbox('soya', 1) !!}
            <br>
            {!! Form::label('Nueces:') !!}
            {!! Form::checkbox('nueces', 1) !!}
            <br>
            {!! Form::label('Trigo:') !!}
            {!! Form::checkbox('trigo', 1) !!}
            <br>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('intolerancias', 'Intolerancias', ['class' => 'col-md-4 control-label']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Gluten:') !!}
            {!! Form::checkbox('gluten', 1) !!}
            <br>
            {!! Form::label('Lactosa:') !!}
            {!! Form::checkbox('lactosa', 1) !!}
            <br>
            {!! Form::label('Levadura:') !!}
            {!! Form::checkbox('levadura', 1) !!}
            <br>
        </div>
    </div>
</div>