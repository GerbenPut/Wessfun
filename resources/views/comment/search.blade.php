<div class="card-body">

    <form action="{{ route('comment.search') }}" method="POST" class="ajaxSearch">
        <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
        <input type="submit" value="Search">
    </form>

    <div id="results">
        <span>Loading...</span>
    </div>

</div>