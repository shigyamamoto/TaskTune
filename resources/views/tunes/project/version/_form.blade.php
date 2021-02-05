<div class="mb-1 form-group row">
    {{ Form::label('name', 'Version', ['class' => 'col-sm-2 form-label']) }}
    <div class="col-sm-10">
        {{ Form::text('name',
            isset($version->name)
            ? $version->name
            : '',
        [
            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
            'placeholder' => 'バージョン名',
            'required'
        ]) }}
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="mb-1 form-group row">
    {{ Form::label('status', 'Status', ['class' => 'col-sm-2 form-label']) }}
    <div class="col-sm-10">
        {!! Form::select('status',
            ['進行中','ロック中','終了'],
            0,
            [
                'class' => 'form-select form-select-sm' . ($errors->has('status') ? ' is-invalid' : ''),
                'readonly' => 'true'
            ])
        !!}
        @error('status')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="mb-1 form-group row">
    {{ Form::label('start_date', 'Start Date', ['class' => 'col-sm-2 form-label']) }}
    <div class="col-sm-10">
        {{ Form::date('start_date',
            isset($version->start_date)
                ? $version->start_date->format('Y-m-d')
                : now()->format('Y-m-d'),
        [
            'class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : '')
        ]) }}
        @error('start_date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="mb-1 form-group row">
    {{ Form::label('end_date', 'End Date', ['class' => 'col-sm-2 form-label']) }}
    <div class="col-sm-10">
        {{ Form::date('end_date',
            isset($version->end_date)
                ? $version->end_date->format('Y-m-d')
                : now()->format('Y-m-d'),
        [
            'class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : '')
        ]) }}
        @error('end_date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>