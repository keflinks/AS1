<div class="border rounded shadow p-3">
    <div class="d-flex justify-content-between">
        <div>
            <div class="text-danger mb-1">
                {{ $registration->student->name }}
            </div>
            <div class="mb-1">
                {{ $registration->lesson->name }}
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <span class="text-primary">
                {{ round($registration->price, 2) }} <small>TMT</small>
            </span>
        </div>
</div>