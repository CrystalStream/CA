@extends('welcome')

@section('content')
<div class="row">
  <div class="col-xs-10 col-sm-6 col-md-4" style="overflow: hidden;">
    <div class="thumbnail">
      <img src="{{ asset('/img/coppel.jpeg') }}" alt="Coppel" class="img-responsive">
      <div class="caption">
        <h3>Tarjeta de coppel</h3>
				<ul class="list-group">
					<li class="list-group-item">
						Tipo: <span class="pull-right label label-primary app-label">Credito</span>
					</li>
					<li class="list-group-item">
						Fecha de pago: <span class="pull-right label label-danger app-label">16 del mes</span>
					</li>
					<li class="list-group-item">
						Dinero en la tarjeta: <span class="pull-right label label-success app-label">$5000</span>
					</li>
				</ul>
        <p class="text-center"><a href="#" class="btn btn-warning btn-block app-btn" role="button">Ver movimientos</a></p>
      </div>
    </div>
  </div>
</div>
@endsection