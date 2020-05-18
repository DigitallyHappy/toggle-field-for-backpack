<!-- Toggle Field for Backpack for Laravel  -->
{{-- 
    Author: Adoptavia 
    Website: https://github.com/adoptavia 
    Addon: https://github.com/digitallyhappy/toggle-field-for-backpack
--}}

@include('crud::fields.inc.wrapper_start')
    @include('crud::fields.inc.translatable_icon')
    <div class="checkbox">
        <label class="switch">
            <input type="hidden" name="{{ $field['name'] }}" value="0">
            <input type="checkbox" 
                value="1"
                name="{{ $field['name'] }}"
                
                {{-- data-init-function="bpFieldInitToggleElement" --}}

                @if (old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? false)
                checked="checked"
                @endif

                @if (isset($field['attributes']))
                    @foreach ($field['attributes'] as $attribute => $value)
                        {{ $attribute }}="{{ $value }}"
                    @endforeach
                @endif

            >
            <span class="slider round"></span>
        </label><span>{!! $field['label'] !!}</span>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
@include('crud::fields.inc.wrapper_end')


{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <style type="text/css">
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 3em;
            height: 1.5em;
            margin-right: 5px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1em;
            width: 1em;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #467FD0;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #467FD0;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    {{-- @push('crud_fields_scripts')
        <script>
            function bpFieldInitToggleElement(element) {
                // element will be a jQuery wrapped DOM node
                
            }
        </script>
    @endpush --}}

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}