<label for="{{ $field }}" class="form-label">{{ $label }}</label>
<input type="{{ $type }}" id="{{ $field }}" name="{{ $field }}"
    class="form-control{{ $classes != '' ? ' ' . $classes : '' }}" value="{{ $value }}">
@error('name_surname')
    <small class="text-danger">{{ $message }}</small>
@enderror
