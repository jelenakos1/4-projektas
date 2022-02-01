<h1>Index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Excerpt</th>
        <th>Description</th>
        <th>Author</th>
    </tr>

    @foreach ($articles as $article)
    <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->excerpt}}</td>
        <td>{{$article->description}}</td>
        <td>{{$article->author}}</td>

    </tr>
    @endforeach

</table>