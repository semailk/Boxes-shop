<!-- field_type_name -->
@include('crud::fields.inc.wrapper_start')
<label>{!! $field['label'] !!}</label>

<input
    type="hidden"
    name="{{ $field['name'] }}"
    value="{{ base64_encode($field['value'] ?? $field['default'] ?? '') }}"
>
<div
    data-init-function="bpFieldInitJsonEditorElement"
    data-name="{{ $field['name'] }}"
    @include('crud::fields.inc.attributes', ['default_class' => ''])>
</div>

{{-- HINT --}}
@if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
@endif

@include('crud::fields.inc.wrapper_end')

@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD EXTRA CSS  --}}
    {{-- push things in the after_styles section --}}
    @push('crud_fields_styles')
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    @endpush

    {{-- FIELD EXTRA JS --}}
    {{-- push things in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Base64/1.1.0/base64.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jsoneditor.js') }}"></script>

        <script>
            function bpFieldInitJsonEditorElement(element) {
                let isEditing = {{ $crud->entry ? 'true' : 'false' }};
                if (!isEditing) return;

                let editorInput = $(`input[name="${element.data('name')}"]`).first();
                let editor = new JSONEditor(element[0], {
                    theme: 'bootstrap4',
                    iconlib: 'fontawesome5',
                    schema: {!! ($crud->entry ? $crud->entry['schema'] : '{}') !!},
                });

                let currentValue = atob(editorInput.val());
                if(currentValue) {
                    editor.setValue(JSON.parse(currentValue));
                }

                editor.on('change',() => {
                    editorInput.val(JSON.stringify(editor.getValue()));
                });
            }
        </script>
    @endpush
@endif
