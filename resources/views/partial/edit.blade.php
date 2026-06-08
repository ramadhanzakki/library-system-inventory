<div class="page-title">
    <h2>Edit Book</h2>
    <p>Please fill out the form below to edit a book collection.</p>
</div>

<div class="form-box">
    <form 
        method="POST" 
        action="{{ route('book.update', $book->id_book) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')
        <div class="input-group">
            <label for="title">Book Title: </label>
            <input type="text" name="title" id="title" value="{{ $book->title }}">
        </div>

        <div class="input-group">
            <label for="author">Book Author: </label>
            <input type="text" name="author" id="author" value="{{ $book->author }}">
        </div>

        <div class="input-group">
            <label for="publisher">Book Publisher: </label>
            <input type="text" name="publisher" id="publisher" value="{{ $book->publisher }}">
        </div>

        <div class="input-group">
            <label for="year">Book Year: </label>
            <input type="text" name="year" id="year" value="{{ $book->year }}">
        </div>

        <div class="input-group">
            <label>Book Category: </label>
            <select name="category" required>
                <option value="" disabled>Select Category</option>
                <option value="fiction" @selected($book->category === 'fiction')>Fiction</option>
                <option value="non-fiction" @selected($book->category === 'non-fiction')>Non-Fiction</option>
                <option value="science" @selected($book->category === 'science')>Science</option>
                <option value="history" @selected($book->category === 'history')>History</option>
                <option value="education" @selected($book->category === 'education')>Education</option>
            </select>
        </div>

        <div class="btn-group">
            <button type="submit" class="save-btn">SAVE BOOK</button>
            <a href="#" class="back-btn">BACK</a>
        </div>
    </form>
</div>