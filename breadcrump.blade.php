<style>
.breadcrumb-custom {
    white-space: nowrap;
}

.breadcrumb-custom .breadcrumb-item a {
    text-decoration: none;
    color: var(--navy);
    transition: color .2s;
}

.breadcrumb-custom .breadcrumb-item a:hover {
    color: var(--blue);
}

.breadcrumb-truncate {
    max-width: 180px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

@media (min-width: 768px) {
    .breadcrumb-truncate {
        max-width: 100%;
    }
}
</style>

<div class="breadcrumb-row border-bottom border-dashed">
    <div class="container">
        <ul class="list-inline d-flex flex-nowrap align-items-center overflow-hidden mb-0 breadcrumb-custom">
            @foreach($breadcrumbs as $breadcrumb)
                @if(!$loop->last)
                    <li class="list-inline-item">
                        <a href="{{ $breadcrumb['url'] }}" class="text-decoration-none">
                            {{ $breadcrumb['label'] }}
                        </a>
                    </li>
                @else
                    <li class="list-inline-item breadcrumb-item active breadcrumb-truncate" title="{{ $breadcrumb['label'] }}">
                        {{ $breadcrumb['label'] }}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>