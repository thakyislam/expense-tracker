<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Expense</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Expense</h2>
        <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Category Field -->
            <div class="mb-3">
                <label for="category" class="form-label">Category:</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $expense->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Name Field -->
            {{-- <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $expense->name) }}" required>
            </div> --}}

            <!-- Amount Field -->
            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount', $expense->amount) }}" required>
            </div>

            <!-- Date Field -->
            <div class="mb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $expense->date) }}" required>
            </div>

            <!-- Description Field -->
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $expense->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Expense</button>
            <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
