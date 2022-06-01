
@if(session('success'))
    <div class="alert_success">
        {{ session('success') }}
    </div>
@endif