<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    {{$subtitle ?? ''}}
                </div>
                <h2 class="page-title">
                    {{$title ?? ''}}
                </h2>
            </div>
            <!-- Page title actions -->
            @if(isset($slot) && $slot->isNotEmpty())
            <div class="col-auto ms-auto d-print-none">
                {{$slot}}
            </div>
            @endif
        </div>
    </div>
</div>
