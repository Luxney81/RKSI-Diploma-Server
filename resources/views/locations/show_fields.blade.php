<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $location->id !!}</p>
</div>

<!-- Latitude Field -->
<div class="form-group">
    {!! Form::label('latitude', 'Latitude:') !!}
    <p>{!! $location->latitude !!}</p>
</div>

<!-- Longitude Field -->
<div class="form-group">
    {!! Form::label('longitude', 'Longitude:') !!}
    <p>{!! $location->longitude !!}</p>
</div>

<!-- Address Id Field -->
<div class="form-group">
    {!! Form::label('address_id', 'Address Id:') !!}
    <p>{!! $location->address_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $location->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $location->updated_at !!}</p>
</div>
