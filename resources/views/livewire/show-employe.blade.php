<div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                    </span>
                </th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allEmploye as $item)
            <tr>
                <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox5" name="options[]" value="1">
                        <label for="checkbox5"></label>
                    </span>
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <button data-target="#editEmployeeModal" wire:click="edit({{$item->id}})" class="edit btn btn-info" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></button>
                    <button data-target="#deleteEmployeeModal" class="delete btn btn-danger" wire:click = "delete({{$item->id}})" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
