@extends(config('tweny-permission.layout.template'))

@section(config('tweny-permission.layout.section'))

    <x-card cardTitle="New Role">


    </x-card>

<!-- Start form -->
<x-form action="{{route('roles.store')}}">

    <div class="form-group">
        <x-label for="role_name"/>
        <x-input name="role_name" />
        <x-error field="role_name" class="text-red-500" />
    </div>

{{--    <div class="form-group">--}}
{{--        <x-form.label name="Description" />--}}
{{--        <textarea name="descriptions" id="descriptions" class="form-control @error('descriptions') is-invalid @enderror">{{old('descriptions')}}</textarea>--}}
{{--        @error('descriptions') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror--}}
{{--    </div>--}}

{{--    <div class="form-group row">--}}
{{--        <div class="col-md-12 mb-3">--}}
{{--            <x-form.label name="Assign Permissions" />--}}
{{--        </div>--}}
{{--        <x-select.multi-permission />--}}
{{--    </div>--}}

    <div class="form-group text-right">
        <x-button class="btn btn-primary" label="add"/>
    </div>
</x-form>
<!-- end form -->

@endsection
