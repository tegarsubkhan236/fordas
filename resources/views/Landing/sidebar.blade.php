<div
    role="navigation"
    id="sidebar"
    class="col-xs-6 col-sm-3 sidebar-offcanvas"
    style="display: block;">
    <div class="word-break hidden-print" id="ds-options">
        <h2 class="ds-option-set-head  h6">Menu</h2>
        <div
            id="aspect_viewArtifacts_Navigation_list_browse"
            class="list-group">
            <a href="/" class="list-group-item active">
                <span class="h5 list-group-item-heading  h5">Beranda</span>
            </a>
            <a href="/about" class="list-group-item">
                <span class="h5 list-group-item-heading  h5">About</span>
            </a>
        </div>

        <h2 class="ds-option-set-head  h6">Browse</h2>
        <div
            id="aspect_viewArtifacts_Navigation_list_browse"
            class="list-group">
            <a href="/all_fordas" class="list-group-item active">
                <span class="h5 list-group-item-heading  h5">All of FORDAS</span>
            </a>
            @php
                $data = \App\Models\Wilayah::all();
            @endphp
            @foreach ($data as $item)
            <a href="/fordas_detail/{{ $item->id }}" class="list-group-item ds-option">{{ $item->nama }}</a>
            @endforeach
        </div>
        <h2 class="ds-option-set-head  h6">My Account</h2>
        @if (session()->get('level'))
            <div
                id="aspect_viewArtifacts_Navigation_list_account"
                class="list-group">
                <a href="/donatur/profile" class="list-group-item ds-option">My Profile</a>
                <a href="/donatur/dashboard" class="list-group-item ds-option">My Dashboard</a>
                <a href="/logout" class="list-group-item ds-option">Logout</a>
            </div>
        @else
            <div
                id="aspect_viewArtifacts_Navigation_list_account"
                class="list-group">
                <a href="/login" class="list-group-item ds-option">Login</a>
                <a href="/register" class="list-group-item ds-option">Register</a>
            </div>
        @endif

        <div id="aspect_viewArtifacts_Navigation_list_context" class="list-group">
        <div id="aspect_viewArtifacts_Navigation_list_administrative" class="list-group">
    </div>
</div>
