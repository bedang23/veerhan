@csrf
<div class="admin-form-grid">
    <div class="admin-field">
        <label for="name">Name *</label>
        <input id="name" class="admin-input" type="text" name="name" value="{{ old('name', $category->name) }}" required>
    </div>
    <div class="admin-field">
        <label for="slug">Slug *</label>
        <input id="slug" class="admin-input" type="text" name="slug" value="{{ old('slug', $category->slug) }}" required>
    </div>
    <div class="admin-field">
        <label for="type">Type *</label>
        <select id="type" class="admin-input" name="type" required>
            @foreach ($types as $value => $label)
                <option value="{{ $value }}" @selected(old('type', $category->type) === $value)>{{ $label }}</option>
            @endforeach
        </select>
    </div>
    <div class="admin-field admin-field-wide">
        <label for="description">Description</label>
        <textarea id="description" class="admin-input admin-textarea" name="description" rows="4">{{ old('description', $category->description) }}</textarea>
    </div>
</div>
<div class="admin-form-actions">
    <button type="submit" class="admin-btn-inline">Save Category</button>
    <a href="{{ route('admin.categories.index') }}" class="admin-link" style="font-size:14px;">Cancel</a>
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
