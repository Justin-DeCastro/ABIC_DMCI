<form id="feedbackForm" action="{{ route('feedback.store') }}" method="Put">
    @csrf
    <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="message">Feedback Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="5">5 - Excellent</option>
            <option value="4">4 - Very Good</option>
            <option value="3">3 - Good</option>
            <option value="2">2 - Fair</option>
            <option value="1">1 - Poor</option>
        </select>
    </div>
    <button type="submit">Submit Feedback</button>
</form>
