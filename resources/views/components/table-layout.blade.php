
<div class="d-flex gap-3 top-input-space">

    <h5 class="space">
        {{$name}}
    </h5>    
    <div class="d-flex flex-wrap right-side-top">
        <div class="space">  
            <select name="eStatus" id="eStatus" class="form-select">
                <option value="">Action</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Pending">Pending</option>
                <option value="delete">Delete</option>
                <option value="Recover">Recover</option>
            </select>
        </div>
        <div class="space">
            <select name="eDeleted" id="eDeleted" class="form-select">
                <option value="">Deleted</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="space">
                 <a href="{{url($url)}}" class="btn btn-primary">+ Add</a>
        </div>
    </div>

</div>
