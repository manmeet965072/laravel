<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Title</th>
            <th>Desc</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->description }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>#</th>
            <th>#</th>
            <th>#</th>
        </tr>
    </tfoot>
</table>

<div>
    <!-- {{$posts}} -->

    {{ $posts->links() }}
</div>
