
@foreach ($posts as $post)
    <tr>
        <td>{{ $post->firstname }}</td>
        <td>{{ $post->lastname }}</td>
    </tr>
@endforeach