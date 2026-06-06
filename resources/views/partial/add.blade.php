<div class="page-title">
    <h2>Add Book</h2>
    <p>Please fill out the form below to add a new book collection.</p>
</div>

<div class="form-box">
    <form method="POST" action="">
        <div class="input-group">
            <label for="title">Book Title: </label>
            <input type="text" name="title" id="title">
        </div>

        <div class="input-group">
            <label for="author">Book Author: </label>
            <input type="text" name="author" id="author">
        </div>

        <div class="input-group">
            <label for="publisher">Book Publisher: </label>
            <input type="text" name="publisher" id="publisher">
        </div>

        <div class="input-group">
            <label for="year">Book Year: </label>
            <input type="text" name="year" id="year">
        </div>

        <div class="input-group">
            <label>Book Category: </label>
            <select name="category" required>
                <option value="" disabled selected>Select Category</option>
                <option value="fiction">Fiction</option>
                <option value="non-fiction">Non-Fiction</option>
                <option value="science">Science</option>
                <option value="history">History</option>
                <option value="education">Education</option>
            </select>
        </div>

        <div class="btn-group">
            <button type="submit" class="save-btn">SAVE BOOK</button>
            <a href="#" class="back-btn">BACK</a>
        </div>
    </form>
</div>