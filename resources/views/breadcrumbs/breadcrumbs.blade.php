@if (count($breadcrumbs))
    <ol id="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        @foreach ($breadcrumbs as $index=>$breadcrumb)
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                href="{{ $breadcrumb->url }}"><span itemprop="name">{!! $breadcrumb->title !!}</span></a>
            <meta itemprop="position" content="{{ $index }}" />
        @endforeach
    </ol>
@endif