@extends('layouts.backend')
@section('title','Update User Roles')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-card cardTitle="Update User Role">
                <!-- Start form -->
                {{ Form::model($role, array('route' => array('roles.update',$role), 'method' => 'PUT')) }}
                    @csrf
                    <div class="mb-3">
                        <x-label for="name" star="true"/>
                        <x-input name="name" required :value="$role->name" />
                        <x-error field="name" />
                    </div>
                    <div class="mb-3">
                        <x-label for="description" />
                        <x-textarea name="descriptions" class="form-control" >{{$role->descriptions}}</x-textarea>
                        <x-error field="descriptions" />
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-12 mb-3">
                            <x-label for="assign_permissions" />
                        </div>
                        <x-auth.permission />
                        <x-error field="permissions" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-nav-link href="{{route('roles.index')}}" label="Back" class="btn btn-danger"/>
                        </div>
                        <div class="col-md-6 text-end">
                            <x-button class="btn btn-primary" label="update" />
                        </div>
                    </div>
                {{Form::close()}}

            </x-card>
        </div>
    </div>

@endsection
