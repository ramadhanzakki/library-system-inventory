<div class="hero">
    <h1>Welcome to E-Library </h1>
    <p>Manage your library's book collection with a modern and efficient management system.</p>
</div>

<div class="title">
    <div class="partial-title">
        <h2>Books Collection</h2>
    </div>
    <div class="add-book">
        <a href="{{ route('book.create') }}" class="add-btn">Add Book</a>
    </div>
</div>

<div class="box-table">
    <table>
        <thead>
                <tr>
                    <th>No</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Year</th>
                    <th>Cataogry</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->year }}</td>
                    <td><span class="badge">{{ $book->category }}</span></td>
                    <td>
                        <a href="#" class="edit-btn">Edit</a>
                        <form action="{{ route('book.destroy', $book->id_book) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE');

                            <button type="submit" class="delete-btn" onclick="return confirm('Yakin Mau menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <?php $no++;?>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center">No books are available yet</td>
                </tr>
                @endforelse
            </tbody>
    </table>
</div>