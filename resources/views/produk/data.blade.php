<table class="table table-compact table-striped" id="data-produk">
    <thead>
        <tr>
            <th class="text-right">ID</th>
            <th class="text-right">Name</th>
            <th class="text-right">Price</th>
            <th class="text-right">Stock</th>
            <th class="text-right">Tag</th>
            <th class="text-right">Images</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $p)
            <tr>
                <td>{{ $i = !isset($i) ? $i = 1 : ++$i }}</td>
                <td class="text-right">{{ $p->category_id }}</td>
                <td class="text-right">{{ $p->price }}</td>
                <td class="text-right">{{ $p->stock }}</td>
                <td class="text-right">{{ $p->tag }}</td>
                <td class="text-right">{{ $p->images }}</td>
                <td class="text-right">
                    <button class="btn" data-toggle="modal" data-target="#modalEdit" data-mode="edit" data-id="{{ $p->id }}" data-nama_produk="{{ $p->nama_produk }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="{{ route('produk.destroy', $p->id) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_produk="{{ $p->nama_produk }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
