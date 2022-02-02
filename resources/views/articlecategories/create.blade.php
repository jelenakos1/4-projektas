<form method="POST" action="{{ route('articlecategory.store') }}">
        Title: <input type="text" name="articlecategory_title"/>
      
        Description: <input type="text" name="articlecategory_description"/>
       

    @csrf

    <button type="submit">Add</button>
</form>