@forelse($comments as $comment)
    <hr>

    <div class="panel-body">
        <h3>
            <b>
                <a href="{{ route('comment.show', $comment) }}">
                    {{ $comment->title }}
                </a>
            </b>
        </h3>

        <p>{{ $comment->message }}</p>

    </div>
@empty
    <span>No results</span>
@endforelse