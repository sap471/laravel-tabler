@props(['name', 'label' => null, 'placeholder' => null, 'formClass' => 'mb-3', 'errorBags' => null])

<div class="{{ $formClass }}">
    @if (isset($label))
        <label class="form-label">{{ $label }}</label>
    @endif

    <input class="form-control @error($name, $errorBags) is-invalid @enderror" name="{{ $name }}"
        placeholder="{{ $placeholder ?: $label ?: '' }}"
        {{ $attributes->merge(['type' => 'text', 'value' => old($name)]) }} />

    @error($name, $errorBags)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
