@foreach ($dataDataset as $item)
<tr>
    <td>{{ $item->judul_dataset }}</td>
    <td>{{ $item->pembuat }}</td>
    <td>{{ $item->created_at }}</td>
    <td>
        <span><i class="bi bi-pencil-square text-info fs-5"></i></span>
        <span><i class="bi bi-trash text-danger fs-5"></i></span>
    </td>
</tr>
@endforeach
