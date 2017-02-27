@extends('welcome')

@section('title', 'Titulo de la tarjeta')

@section('content')
	<div class="row">
	<div class="page-header">
  	<h3>Tarjeta de coppel <small>Tarjeta de credito</small></h3>
	</div>
		<div class="well" style="overflow: hidden;">
			<div class="col-xs-12 col-md-4">
				<img src="{{ asset('/img/coppel.jpeg') }}" alt="CardDetail" class="img-responsive">
			</div>
			<div class="hidden-xs hidden-sm col-md-7">
				<div class="col-xs-12 text-center has-border-bottom">
					<h4>Detalles</h4>
				</div>
				<div class="col-xs-12">
					<ul class="styless">
							<li class="property-item">
								<div class="col-xs-12 col-md-6">
									<span class="property-name">Fecha limite de pago:</span>
								</div>
								<div class="col-xs-12 col-md-6">
									<span class="property-value">16 de cada mes</span>
									&nbsp;&nbsp;(<span class="small-property">Faltan 16 Dias</span>)
								</div>
							</li>
							<li class="property-item">
								<div class="col-xs-12 col-md-6">
									<span class="property-name">Limite de la tarjeta:</span>
								</div>
								<div class="col-xs-12 col-md-6">
									<span class="property-value">$5000</span>								
								</div>
							</li>
					</ul>
				</div>
			</div>
		</div>{{-- ./well --}}
		<div class="container">
			<div class="col-xs-12">
				<button class="btn btn-primary" data-toggle="modal" data-target="#addNewModal">
					<span class="glyphicon glyphicon-plus"></span>
					Agregar gasto
				</button>
			</div>
			<table class="table table-stripped col-xs-4" id="card-table">
				<thead>
					<tr>
						<th>Movimiento</th>
						<th>Fecha de movimiento</th>
						<th>Cantidad</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>wrerf</td>
						<td>wrerf</td>
						<td>wrerf</td>
						<td>wrerf</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="modal fade" id="addNewModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open() !!}
        	<div class="form-group">
        	<label>Nombre</label>
        		<div class="input-group">
        			<div class="input-group-addon">
        				<span class="glyphicon glyphicon-tags"></span>
        			</div>
        			{!! Form::text('name', null, array('class'=>'form-control')) !!}
        		</div>
        	</div>
        	<div class="form-group">
        	<label>Fecha:</label>
        		<div class="input-group">
        			<div class="input-group-addon">
        				<span class="glyphicon glyphicon-calendar"></span>
        			</div>
        			{!! Form::date('date', null, array('class'=>'form-control datepicker', 'id'=>'creationDate')) !!}
        		</div>
        	</div>
        	<div class="form-group">
        	<label>Precio:</label>
        		<div class="input-group">
        			<div class="input-group-addon">
        				<span class="glyphicon glyphicon-usd"></span>
        			</div>
        			{!! Form::text('quantity', null, array('class'=>'form-control')) !!}
        		</div>
        	</div>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection