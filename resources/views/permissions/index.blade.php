@extends('layouts.backend')
@section('title','User Permissions')
@section('content')

        <x-card cardTitle="Permissions">

            <x-slot name="cardButtons">
                <x-nav-link href="{{route('permissions.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/><br/>
            </x-slot>

            <x-alert />

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Guard</th>
                    <th>Group Name</th>
                    <th>Description</th>
                    <th>Roles</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($permissions as $permission)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $permission->name }}</td>
                        <td  class="text-center">{{ $permission->guard_name }}</td>
                        <td  class="text-center">{{ $permission->group_name }}</td>
                        <td  class="text-left">{{ $permission->descriptions }}</td>
                        <td  class="text-center">
                            <ul class="list list-inline">
                                @foreach($permission->role as $role)
                                    <li class="list-inline-item">{{$role->name.' , '}} </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-center">
                            <x-nav-link label="edit" href="{{route('permissions.edit',$permission)}}" class="btn btn-sm btn-outline-primary"  />
                            <x-delete action="{{route('permissions.destroy',$permission)}}" class="btn-outline-danger"/>
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
