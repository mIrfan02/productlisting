<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Product</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="col-md-9 col-lg-10" id="main">
        <div class="card mx-auto mt-5 shadow-lg p-3 mb-5 bg-white rounded"
            style="background-color: #eaedee; color: #080808; width: 60%; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
            <div class="card-body">
                <h4 class="card-title text-center mb-4"
                    style="font-size: 35px; font-family: ui-monospace; font-weight: bold;">
                    Edit Product
                </h4>
                <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST"
                    enctype="multipart/form-data" style="font-weight: bold;">
                    @csrf
                    @method('POST') <!-- HTTP method spoofing -->

                    <!-- Name input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $product->name }}" placeholder="Enter product name" required>
                    </div>

                    <!-- Description input -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Product Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter product description"
                            rows="3" required>{{ $product->description }}</textarea>
                    </div>

                    <!-- Category dropdown list -->
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Product Category</label>
                        <select class="form-control" name="category_id" id="category_id" required>
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" name="{{ $category->title }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Price input -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="number" class="form-control" name="price" id="price"
                            value="{{ $product->price }}" placeholder="Enter product price" required>
                    </div>

                    <!-- Image input -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="image" id="image" accept="image/*">
                        @if ($product->image)
                            <img src="{{ asset('uploads/Products/' . $product->image) }}" alt="{{ $product->name }}"
                                class="mt-2" style="width: 100px;">
                        @endif
                    </div>
                    <div class="mb-5 form-group">
                        <label for="printByDropdown">PrintBy</label>
                        <select class="form-control" id="printByDropdown" name="printByDropdown">
                            <option value="">Select an option</option>
                            <option value="Boxes By Industry"
                                {{ $product->checkbox === 'Boxes By Industry' ? 'selected' : '' }}>
                                Normal Product</option>
                            <option value="Boxes By Style"
                                {{ $product->checkbox === 'Boxes By Style' ? 'selected' : '' }}>
                                Recent Product</option>

                        </select>
                    </div>

                    <!-- Submit button -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-dark d-block mx-auto" style="font-weight: bold;">Update
                            Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
