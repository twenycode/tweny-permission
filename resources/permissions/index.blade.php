@extends('layouts.admin')
@section('title','Permissions')
@section('content')

    <x-card title="Permissions Lis">

        <x-slot name="cardButton">
            @permission('permission_create')
                <x-button.create label="Add" modal="modal"  > #new </x-button.create>
            @endpermission
        </x-slot>
        <!-- Table Start -->
        <x-table.listing id="table">

            <!-- table headers -->
            <x-slot name="thead" >
                <th>Name</th>
                <th>Guard</th>
                <th>Category</th>
                <th>Roles</th>
            </x-slot>

            @foreach ($permissions as $permission)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-left">{!!$permission->name!!}</td>
                    <td  class="text-center">{{$permission->guard_name}}</td>
                    <td  class="text-center">{{$permission->category}}</td>
                    <td  class="text-center">
                        <ul class="list list-inline">
                            @foreach($permission->role as $role)
                                <li class="list-inline-item">{{$role->name.' , '}} </li>
                            @endforeach
                        </ul>
                    </td>
                    <td  class="text-center">
                        <div class="btn-group dropleft">
                            <button type="button" class="btn btn-link btn-sm text-dark" style=".btn:hover{border:0;}" data-toggle="dropdown">
                                <i class="fas fa-cog"></i>
                            </button>
                            <div class="dropdown-menu">
                                @permission('permission_update')
                                    <a href="{{route('permissions.edit',$permission)}}" class="dropdown-item" data-toggle="tooltip" data-placement="right" title="Edit" >
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                @endpermission
                                <div class="dropdown-divider"></div>
                                @permission('permission_delete')
                                    <form method="POST" action="{{route('permissions.destroy',$permission)}}" class="form-horizontal" permission="form" autocomplete="off">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-block btn-del" onclick="return confirm('Confirm to delete?')" data-toggle="tooltip" data-placement="right" title="Move Trash">
                                            <i class="fa fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                @endpermission
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-table.listing>
    </x-card>



    @permission('permission_create')
        <!-- Start Modal -->
        <x-modal id="new" title="New Permission">
            <!-- Start form -->
            <x-form.post action="permissions.store">

                <div class="form-group">
                    <x-form.label name="Name: " star="true" for="name" />
                    <x-form.input name="name" id="name" required="required"/>
                </div>

                <div class="form-group">
                    <x-form.label name="Description" />
                    <textarea name="descriptions" id="descriptions" class="form-control @error('descriptions') is-invalid @enderror">{{old('descriptions')}}</textarea>
                    @error('descriptions') <span class="invalid-feedback" permission="alert"> <strong>{{ $message }}</strong> </span> @enderror
                </div>

                <div class="form-group row">
                    <div class="col-md-12 mb-3">
                        <x-form.label name="Assign Roles" />
                    </div>
                    <x-select.multi-role />
                </div>

                <div class="form-group text-right">
                    <x-button.submit />
                </div>
            </x-form.post>
            <!-- end form -->
        </x-modal>
        <!-- end modal -->
    @endpermission

@endsection
