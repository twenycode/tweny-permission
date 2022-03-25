@extends(config('tweny-permission.layout.template'))

@section(config('tweny-permission.layout.section'))

        <x-card cardTitle="Roles">

            <x-slot name="cardButtons">
                <x-nav-link href="{{route('roles.create')}}" label="Add" class="btn btn-primary btn-sm"/><br/>
            </x-slot>

            <x-table>

                <!-- table headers -->
                <x-slot name="thead" >
                    <th class="col-first">#</th>
                    <th>Name</th>
                    <th>Guard</th>
                    <th>Description</th>
                    <th class="col-last"><i class="fa-solid fa-gears"></i></th>
                </x-slot>

                @foreach ($roles as $role)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $role->name }}</td>
                        <td  class="text-center">{{ $role->guard_name }}</td>
                        <td  class="text-left">{{ $role->descriptions }}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach

            </x-table>



        </x-card>


@endsection
