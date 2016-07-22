@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">Registro de cuenta</div>
				<div class="panel-body">

                    @include('errors._errors')

                    {!! Form::open(['url'=>'/auth/register', 'class'=>'form-horizontal', 'role'=>'form'])!!}

                        @include('auth._form')

						<div class="form-group">
							<div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
								</br>
                                {!! Form::submit('Registrar', ['class' => 'btn btn-primary form-control']) !!}
							</div>
						</div>

                    {!! Form::close() !!}
				</div><!--end panel-->
			</div>
		</div>
	</div>
</div>
@endsection
