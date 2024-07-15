<h1>This is the create page</h1>
<p>This is the create page </p>

<div class="row">
    <div class="col-6">
        <form action="{{ url('users') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fullname" class="">Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
