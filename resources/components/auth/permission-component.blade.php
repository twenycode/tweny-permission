@foreach ($permissions as $category=>$perms)
    <div class="col-md-3">
        <h5 class="font-weight-bold text-dark">{{$category}}</h5>
        <ul class="permission-list">
            @foreach ($perms as $permission)
                <li>
                    <label class="label">
                        {{ Form::checkbox('permissions[]',$permission->id) }}
                        {{$permission->action}}
                        <span class="checkmark"></span>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
