@props([
    'title',
    'actions'
])

<div class="card bg-base-100 w-2/3 shadow-xl">
    <h1 class="card-title mb-4">{{$title}}</h1>
    <div class="card-body">
        {{$slot}}
        <div class="card-actions flex items-center justify-between mt-6">
            {{$actions}}
        </div>
    </div>
</div>
