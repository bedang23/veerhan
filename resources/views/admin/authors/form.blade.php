@csrf
<div class="admin-form-grid">
    <div class="admin-field">
        <label for="name">Name *</label>
        <input id="name" class="admin-input" type="text" name="name" value="{{ old('name', $author->name) }}" required>
    </div>
    <div class="admin-field">
        <label for="slug">Slug *</label>
        <input id="slug" class="admin-input" type="text" name="slug" value="{{ old('slug', $author->slug) }}" required>
    </div>
    <div class="admin-field">
        <label for="designation">Designation</label>
        <input id="designation" class="admin-input" type="text" name="designation" value="{{ old('designation', $author->designation) }}" placeholder="e.g. Senior Web Developer">
    </div>
    <div class="admin-field">
        <label for="years_experience">Years of Experience *</label>
        <input id="years_experience" class="admin-input" type="number" min="0" max="60" name="years_experience" value="{{ old('years_experience', $author->years_experience ?? 0) }}" required>
    </div>
    <div class="admin-field admin-field-wide">
        <label for="bio">Bio</label>
        <textarea id="bio" class="admin-input admin-textarea" name="bio" rows="6" placeholder="Short biography of the author...">{{ old('bio', $author->bio) }}</textarea>
    </div>
    <div class="admin-field">
        <label for="meta_title">Meta Title</label>
        <input id="meta_title" class="admin-input" type="text" name="meta_title" value="{{ old('meta_title', $author->meta_title) }}">
    </div>
    <div class="admin-field">
        <label for="meta_description">Meta Description</label>
        <textarea id="meta_description" class="admin-input admin-textarea" name="meta_description" rows="3">{{ old('meta_description', $author->meta_description) }}</textarea>
    </div>
</div>
<div class="admin-form-actions">
    <button type="submit" class="admin-btn-inline">Save Author</button>
    <a href="{{ route('admin.authors.index') }}" class="admin-link" style="font-size:14px;">Cancel</a>
</div>

<script>
    document.getElementById('name').addEventListener('input', function () {
        const slugField = document.getElementById('slug');
        if (slugField.dataset.manual) return;
        slugField.value = this.value
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .trim()
            .replace(/\s+/g, '-');
    });
    document.getElementById('slug').addEventListener('input', function () {
        this.dataset.manual = true;
    });
</script>
