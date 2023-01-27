<div class="container">
    <h1>{{ $member->name }}</h1>
    <table class="table">
        <tr>
            <td>Email</td>
            <td>{{ $member->email }}</td>
        </tr>
        <tr>
            <td>Membership Type</td>
            <td>{{ $member->membership_type }}</td>
        </tr>
        <tr>
            <td>Membership Expiration</td>
            <td>{{ $member->membership_expiration }}</td>
        </tr>
    </table>
</div>