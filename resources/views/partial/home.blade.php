<div class="hero">
    <h1>Welcome to E-Library </h1>
    <p>Manage your library's book collection with a modern and efficient management system.</p>
</div>

<div class="title">
    <div class="partial-title">
        <h2>Books Collection</h2>
    </div>
    <div class="add-book">
        <a href="{{ route('add') }}" class="add-btn">Add Book</a>
    </div>
</div>

<div class="box-table">
    <table>
        <thead>
                <tr>
                    <th>No</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Cataogry</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" style="text-align: center">No books are available yet</td>
                </tr>
            </tbody>
    </table>
</div>