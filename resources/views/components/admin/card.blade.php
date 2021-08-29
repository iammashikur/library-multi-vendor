@props(['heading', 'headerAction', 'headerActionUrl'])

<div class="card card-primary">
    <div style="border-bottom-color: #d0d0d0" class="card-header">
        <h4>{{ $heading }}</h4>
        <div class="card-header-action">
            {{ $action ?? '' }}
        </div>
    </div>
    
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

