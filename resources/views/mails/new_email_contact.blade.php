<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">New contact received to form <span style="color:blue">Boolfolio</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>
                <strong style="color:red">You have received a new messsage</strong>
                <strong>User</strong> {{ $lead->name }}
                <strong>Email</strong> {{ $lead->email }}
                <strong>Content</strong> {{ $lead->content }}
            </p>
        </div>
    </div>
</div>