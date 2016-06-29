<script>
    $(document).ready(function() {
        $("#agregar_ingrediente").click(function () {
            $("ul").append('<li>'+document.getElementById('tags').value+'</li>');
        });
        $("#eliminar_ingrediente").click(function () {
            $("li:last").remove();
        });
    });

</script>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="ui-widget form-group">
    <label for="tags" class="col-md-4 control-label">Ingrediente: </label>
    <div class="col-md-6">
        <input id="tags">
    </div>
</div>

<div>
    <ul id="ingredientes">
    </ul>

    <button type="button" id="agregar_ingrediente">Agregar</button>
    <button type="button" id="eliminar_ingrediente">Eliminar</button>
</div>

<div class="form-group">
    {!! Form::label('receta', 'Receta:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('receta', null, ['class' => 'form-control']) !!}
    </div>
</div>



<div class="form-group">
    {!! Form::label('raciones', 'Raciones:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('raciones', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('modalidad', 'Modalidad:', ['class' => 'col-md-4 control-label']) !!}
    {!! Form::radio('recipe','Postre') !!} <span style="padding-right: 25px">Postre</span>
    {!! Form::radio('recipe','Salado') !!} <span style="padding-right: 25px">Salado</span>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Imagen:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
    </div>
</div>

<p> Alergénicos:</p>

<div class="row">
    <div class="col-md-3">
        {!! Form::label('Huevo:') !!}
        {!! Form::checkbox('huevo', 1) !!}

    </div>
    <div class="col-md-3">
        {!! Form::label('Pescado:') !!}
        {!! Form::checkbox('pescado', 1) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('Leche:') !!}
        {!! Form::checkbox('leche', 1) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('Mani:') !!}
        {!! Form::checkbox('mani', 1) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        {!! Form::label('Mariscos:') !!}
        {!! Form::checkbox('mariscos', 1) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('Soya:') !!}
        {!! Form::checkbox('soya', 1) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('Nueces:') !!}
        {!! Form::checkbox('nueces', 1) !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('Trigo:') !!}
        {!! Form::checkbox('trigo', 1) !!}
    </div>
</div>

<p> Intolerancias:</p>
<div class="row">
    <div class="col-md-4">
        {!! Form::label('Gluten:') !!}
        {!! Form::checkbox('gluten', 1) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('Lactosa:') !!}
        {!! Form::checkbox('lactosa', 1) !!}
    </div>
    <div class="col-md-4">
        {!! Form::label('Levadura:') !!}
        {!! Form::checkbox('levadura', 1) !!}
    </div>
</div>