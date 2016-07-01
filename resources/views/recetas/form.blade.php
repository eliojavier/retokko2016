<script>
    var ingredientes = ["x"];
    $(document).ready(function() {
        $("#agregar_ingrediente").click(function () {
            if(document.getElementById('tags').value != "") {
                $("ul").append('<li>'+document.getElementById('tags').value+'</li>');
                ingredientes.push(document.getElementById('tags').value);
                document.getElementById('tags').value = "";
                document.getElementById('listaIngredientes').value = JSON.stringify(ingredientes);
            }
        });
        $("#eliminar_ingrediente").click(function () {
            $("li:last").remove();
        });
    });
</script>

<input type="hidden" name="listaIngredientes" value="">

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('receta', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('receta', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('ingredientes', 'Ingredientes', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
                {!! Form::textarea('ingredientes', null, ['class' => 'form-control', 'placeholder'=>'Ingredientes']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('preparacion', 'Preparación', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-8">
                {!! Form::textarea('preparacion', null, ['class' => 'form-control', 'placeholder'=>'Preparación']) !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('raciones', 'Raciones', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-3">
                {!! Form::text('raciones', null, ['class' => 'form-control', 'placeholder'=>'raciones']) !!}
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
</div>

<div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-4">
            {!! Form::label('Huevo:') !!}
            {!! Form::checkbox('huevo', 1) !!}
            {!! Form::label('Pescado:') !!}
            {!! Form::checkbox('pescado', 1) !!}
        </div>

        <div class="col-md-4">
        </div>

    <div class="col-md-3">
            <div class="form-group">
            {!! Form::label('Huevo:') !!}
            {!! Form::checkbox('huevo', 1) !!}
            </div>
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