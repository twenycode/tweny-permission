@extends('layouts.admin')
@section('title','Update Permissions')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">

            <x-card title="Update Permission">
                {{ Form::model($permission, array('route' => array('permissions.update',$permission), 'method' => 'PUT')) }}

                @csrf
                <div class="form-group">
                    <x-form.label name="Name: " star="true" for="name" />
                    <x-form.input name="name" id="name" required="required" :model="$permission"/>
                </div>

                <div class="form-group">
                    <x-form.label name="Description" for="descriptions" />
                    <textarea name="descriptions" id="descriptions" class="form-control @error('descriptions') is-invalid @enderror">{{$permission->descriptions}}</textarea>
                    @error('descriptions') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                </div>

                <div class="form-group row">
                    <div class="col-md-12 mb-3">
                        <x-form.label name="Assign Roles" />
                    </div>
                    <x-select.multi-role />
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-6 float-left">
                        <x-button.back> {{route('permissions.index')}} </x-button.back>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            <x-button.submit label="Update"/>
                        </div>
                    </div>
                </div>
                {{Form::close()}}
            </x-card>
        </div>
    </div>



@endsection
