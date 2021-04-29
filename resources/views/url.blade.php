<x-layout>
    <div>Here is the info about the <b>{{$url->name}}</b>:</div>
    <ul>
        <ol>Created: {{$url->created_at}}</ol>
        <ol>Updated: {{$url->updated_at}}</ol>
    </ul>
</x-layout>
