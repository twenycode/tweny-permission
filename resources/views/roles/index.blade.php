@extends('layouts.backend')
@section('title','User Roles')
@section('content')

        <x-card cardTitle="Roles">

            <x-slot name="cardButtons">
                <x-nav-link href="{{route('roles.create')}}" label="<i class='fa fa-plus'></i> Add" class="btn btn-primary btn-sm"/><br/>
            </x-slot>

            <x-alert />

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" class="table-{color}">
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Guard</th>
                    <th>Description</th>
                    <th>Permissions</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($roles as $role)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $role->name }}</td>
                        <td  class="text-center">{{ $role->guard_name }}</td>
                        <td  class="text-left">{{ $role->descriptions }}</td>
                        <td class="text-center">
                            <ul class="list list-inline">
                                @foreach($role->permission as $permission)
                                    <li class="list-inline-item">{{$permission->name.' , '}} </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-center">
                            <x-nav-link label="edit" href="{{route('roles.edit',$role)}}" class="btn btn-sm btn-outline-primary"  />
                            <x-delete action="{{route('roles.destroy',$role)}}" class="btn-outline-danger"/>
                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
