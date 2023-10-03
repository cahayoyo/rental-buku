    @if (Auth::user()->role_id == 1)
        <a href="/dashboard"
            @if (request()->route()->uri == 'dashboard')
                class='active'
            @endif>Dashboard</a> 
        <a href="/users"
        @if (request()->route()->uri == 'users')
                class='active'
            @endif>Users</a> 
        <a href="/books"
        @if (request()->route()->uri == 'books')
                class='active'
            @endif>Books</a> 
        <a href="/categories"
        @if (request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-delete/{slug}' || request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-deleted')
                class='active'
            @endif>Categories</a> 
        <a href="/rent_logs"
        @if (request()->route()->uri == 'rent_logs')
                class='active'
            @endif>Rent Logs</a> 
        <a href="/logout">Logout</a> 
    @else 
        <a href="/profile" @if (request()->route()->uri == 'profile')
            class='active'
        @endif>Profile</a> 
        <a href="/logout">Logout</a> 
    @endif 
