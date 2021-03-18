<h1>Data List</h1>

<ul>
@foreach($data as $item)
<li><h3>{{$item['title']}}</h3></li>
@endforeach
</ul>