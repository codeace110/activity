<form method="POST" action="{{ route('members.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="membership_type">Membership Type</label>
        <input type="text" class="form-control" id="membership_type" name="membership_type" required>
    </div>
    <div class="form-group">
        <label for="membership_expiration">Membership Expiration Date</label>
        <input type="date" class="form-control" id="membership_expiration" name="membership_expiration" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Member</button>
</form>
