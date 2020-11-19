@if($isInnerPage)
    {{ Breadcrumbs::render(Route::currentRouteName(), $page) }}
@else
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
@endif