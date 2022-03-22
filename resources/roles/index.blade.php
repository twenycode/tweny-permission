
{{--@extends(config())--}}

{{--@extends(config())--}}
{{--@section('title','User Roles List')--}}
{{--@section('content')--}}



{{--    <x-card title="Roles Lis">--}}

{{--        <x-slot name="cardButton">--}}
{{--            @permission('role_create')--}}
{{--                <x-button.create label="Add" modal="modal"  > #new </x-button.create>--}}
{{--            @endpermission--}}
{{--        </x-slot>--}}
{{--        <!-- Table Start -->--}}
{{--        <x-table.listing table="id">--}}

{{--            <!-- table headers -->--}}
{{--            <x-slot name="thead" >--}}
{{--                <th>Name</th>--}}
{{--                <th>Guard</th>--}}
{{--                <th>Description</th>--}}
{{--                <th>Permissions</th>--}}
{{--            </x-slot>--}}

{{--            @foreach ($roles as $role)--}}
{{--                <tr>--}}
{{--                    <td class="text-center">{{$loop->iteration}}</td>--}}
{{--                    <td class="text-left">{!!$role->name!!}</td>--}}
{{--                    <td  class="text-center">{{$role->guard_name}}</td>--}}
{{--                    <td  class="text-center">{{$role->descriptions}}</td>--}}
{{--                    <td  class="text-center">--}}
{{--                        <ul class="list list-inline">--}}
{{--                            @foreach($role->permission as $permission)--}}
{{--                                <li class="list-inline-item">{{$permission->name.' , '}} </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </td>--}}
{{--                    <td  class="text-center">--}}
{{--                       <x-button.dropleft>--}}
{{--                            @permission('role_update')--}}
{{--                                <a href="{{route('roles.edit',$role)}}" class="dropdown-item" data-toggle="tooltip" data-placement="right" title="Edit" >--}}
{{--                                    <i class="fa fa-edit"></i> Edit--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                            @endpermission--}}
{{--                            @permission('role_delete')--}}
{{--                                <form method="POST" action="{{route('roles.destroy',$role)}}" class="form-horizontal" role="form" autocomplete="off">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button class="btn btn-block btn-del" onclick="return confirm('Confirm to delete?')" data-toggle="tooltip" data-placement="right" title="Move Trash">--}}
{{--                                        <i class="fa fa-trash-alt"></i> Trash--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            @endpermission--}}
{{--                       </x-button.dropleft>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--        </x-table.listing>--}}
{{--    </x-card>--}}



{{--    @permission('role_create')--}}
{{--        <!-- Start Modal -->--}}
{{--        <x-modal id="new" title="New Role" class="modal-xl">--}}
{{--            <!-- Start form -->--}}
{{--            <x-form.post action="roles.store">--}}

{{--                <div class="form-group">--}}
{{--                    <x-form.label name="Name: " star="true" for="name" />--}}
{{--                    <x-form.input name="name" id="name" required="required"/>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <x-form.label name="Description" />--}}
{{--                    <textarea name="descriptions" id="descriptions" class="form-control @error('descriptions') is-invalid @enderror">{{old('descriptions')}}</textarea>--}}
{{--                    @error('descriptions') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror--}}
{{--                </div>--}}

{{--                <div class="form-group row">--}}
{{--                    <div class="col-md-12 mb-3">--}}
{{--                        <x-form.label name="Assign Permissions" />--}}
{{--                    </div>--}}
{{--                    <x-select.multi-permission />--}}
{{--                </div>--}}

{{--                <div class="form-group text-right">--}}
{{--                    <x-button.submit />--}}
{{--                </div>--}}
{{--            </x-form.post>--}}
{{--            <!-- end form -->--}}
{{--        </x-modal>--}}
{{--        <!-- end modal -->--}}
{{--    @endpermission--}}

{{--@endsection--}}
