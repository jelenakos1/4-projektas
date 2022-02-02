<h1>Index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
    
        <th>Description</th>
      
    </tr>

    @foreach ($articlecategories as $articlecategory)
    <tr>
        <td>{{$articlecategory->id}}</td>
        <td>{{$articlecategory->title}}</td>
     
        <td>{{$articlecategory->description}}</td>
     

    </tr>
    @endforeach

</table>