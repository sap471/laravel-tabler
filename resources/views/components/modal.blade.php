@props(['name', 'label' => 'Modal Button', 'action' => null, 'title' => 'Modal Title', 'static' => true])

<button type="button" id="modal-button-{{ $name }}" class="btn" data-bs-toggle="modal"
    data-bs-target="#modal-{{ $name }}">
    {{ $label }}
</button>

@push('modals')
    <div class="modal modal-blur fade" id="modal-{{ $name }}" tabindex="-1" aria-modal="true" role="dialog"
        @if ($static) data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modal-button-{{ $name }}" @endif>
        <div class="modal-dialog modal-dialog-centered" role="document">
            {!! '<' . ($action ? 'form method="POST" action="' . route($action) . '"' : 'div') . ' class="modal-content">' !!}
            <div class="modal-header">
                <h5 class="modal-title">
                    {{ $title }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($slot->isNotEmpty())
                    {{ $slot }}
                @endif
            </div>
            @if ($footer && $footer->isNotEmpty())
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @else
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            @endif
            {!! $action ? '</form>' : '</div>' !!}
        </div>
    </div>
@endpush
