{{-- alert dari library spatie/laravel-flash--}}
{{--
    // div untuk tampilkan alert
    <div class="alert d-flex align-items-center alert-{{flash()->class ?? 'success'}}" role="alert">

    // tampilkan icon
    <i class="bi me-2 bi-exclamation-triangle-fill"></i>

    // tampilkan pesan alert
    {{ flash()->message }}
--}}
@if(flash()->message)
    <div class="alert d-flex align-items-center alert-{{flash()->class ?? 'success'}}" role="alert">

        @if(flash()->class == 'warning' || flash()->class == 'danger')
            <i class="bi me-2 bi-exclamation-triangle-fill"></i>
        @endif

        @if(flash()->class == 'info')
            <i class="bi me-2 bi-exclamation-circle-fill"></i>
        @endif

        @if(!flash()->class || flash()->class == 'success')
            <i class="bi me-2 bi-check-circle-fill"></i>
        @endif

        {{ flash()->message }}
    </div>
@endif
