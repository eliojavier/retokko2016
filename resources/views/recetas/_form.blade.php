<script>
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
            {!! Form::checkbox('huevo', 'huevo') !!}
            <br></br>
            {!! Form::label('Pescado:') !!}
            {!! Form::checkbox('pescado', 'pescado') !!}
            <br></br>
            {!! Form::label('Leche:') !!}
            {!! Form::checkbox('leche', 'leche') !!}
            <br></br>
            {!! Form::label('Mani:') !!}
            {!! Form::checkbox('mani', 'mani') !!}
            <br></br>
            {!! Form::label('Mariscos:') !!}
            {!! Form::checkbox('mariscos', 'mariscos') !!}
            <br></br>
            {!! Form::label('Soya:') !!}
            {!! Form::checkbox('soya', 'soya') !!}
            <br></br>
            {!! Form::label('Nueces:') !!}
            {!! Form::checkbox('nueces', 'nueces') !!}
            <br></br>
            {!! Form::label('Trigo:') !!}
            {!! Form::checkbox('trigo', 'trigo') !!}
            <br></br>
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
            {!! Form::checkbox('gluten', 'gluten') !!}
            <br></br>
            {!! Form::label('Lactosa:') !!}
            {!! Form::checkbox('lactosa', 'lactosa') !!}
            <br></br>
            {!! Form::label('Levadura:') !!}
            {!! Form::checkbox('levadura','levadura') !!}
            <br></br>
        </div>
    </div>
</div>