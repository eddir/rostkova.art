@foreach($paintings as $painting)
    <tr>
        <td>{{ $painting->title }}</td>
        <td>{{ $painting->created_at->formatLocalized('%c') }}</td>
        <td><a class="btn btn-success btn-xs btn-block" href="{{ route('paintings.show', [$painting->id]) }}" role="button" title="@lang('Show')"><span class="fa fa-eye"></span></a></td>
        <td><a class="btn btn-warning btn-xs btn-block" href="{{ route('paintings.edit', [$painting->id]) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('paintings.destroy', [$painting->id]) }}" role="button" title="@lang('Destroy')"><span class="fa fa-remove"></span></a></td>
    </tr>
@endforeach
