<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $member->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $member->email }}">
    </div>
    <div class="form-group">
        <label for="membership_type">Membership Type</label>
        <input type="text" class="form-control" name="membership_type" value="{{ $member->membership_type }}">
    </div>
    <div class="form-group">
        <label for="membership_expiration">Membership Expiration</label>
        <input type="date" class="form-control" name="membership_expiration" value="{{ $member->membership_expiration }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>