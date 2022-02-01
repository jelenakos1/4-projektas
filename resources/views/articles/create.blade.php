<form method="POST" action="{{ route('article.store') }}">
        Title: <input type="text" name="article_title"/>
        Excerpt: <input type="text" name="article_excerpt"/>
        Description: <input type="text" name="article_description"/>
        Author: <input type="text" name="author"/>

    @csrf

    <button type="submit">Add</button>
</form>