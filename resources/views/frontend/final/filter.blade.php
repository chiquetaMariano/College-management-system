@extends('frontend.layouts.main')

@section('title', 'Finales')

@section('content')
<div id="finales-filter" class="card-body p-5">
    <form class="form" action="{{ route('frontend.finales') }}" method="post">

        <!-- SELECT SEDE -->
        <div class="form-group row">
            <label class="col-sm-1 col-form-label" for="sede">Sede</label>
            <div class="col-sm-10">
                <select class="form-control" name="sede" required>
                    <option value="">- Seleccionar -</option>
                    @foreach($sedes as $sede)
                    <option value="{{ $sede->sede_id }}">{{ $sede->sede_dn }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- SELECT CARRERA -->
        <div class="form-group row">
            <label class="col-sm-1 col-form-label" for="carrera">Carrera</label>
            <div class="col-sm-10">
                <select class="form-control" name="carrera" required>
                    <option value="">- Seleccionar -</option>
                    @foreach($carreras as $carrera)
                    <option value="{{ $carrera->carrera_id }}">{{ $carrera->carrera_dn }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- SELECT DIVISIÓN -->
        <div class="form-group row">
            <label class="col-sm-1 col-form-label" for="division">División</label>
            <div class="col-sm-10">
                <select class="form-control" name="division" required>
                    <option value="">- Seleccionar -</option>
                    @foreach($divisiones as $division)
                    <option value="{{ $division->division_id }}">{{ $division->division }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- SELECT LLAMADO -->
        <div class="form-group row">
            <label class="col-sm-1 col-form-label" for="llamado">Llamado</label>
            <div class="col-sm-10">
                <select class="form-control" name="llamado" required>
                    <option value="">- Seleccionar -</option>
                    @foreach($llamados as $llamado)
                    <option value="{{ $llamado->llamado_id }}">{{ $llamado->llamado }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- BUTTONS -->
        <div class="text-center mt-5">
            <button type="submit" name="filter" class="btn btn-primary">Buscar</button>
            <button type="reset" name="reset" class="btn btn-secondary">Limpiar</button>
        </div>
    </form>
</div>

@endsection
