{{-- this is comment --}}
@if($name != null)
    @if($name)
        <p>Hello, {{ $name }}</p>
    @else
        <p>Name missing</p>
    @endif
    @if(strpos($name, 'B') === 0)
        <p>Name starts with B</p>
    @else
        <p>Name doesnt start with B</p>
    @endif
@else
    <p>Name missing</p>
@endif
@if(count($arr) > 0)
    @foreach ($arr as $item)
        <p>{{ $item }}</p>
        @if ($loop->first)
            <p>This is the first iteration</p>
        @endif
        @if ($loop->last)
            <p>This is the last iteration</p>
        @endif
    @endforeach
@else
    <p>Array is empty</p>
@endif
    