<div class="category" style="width: 300px; margin-top: 35px; margin-bottom: 25px;">
    <h2>Category {{ $category['id'] }}:</h2>
    <p>Name: {{ $category['name'] }}</p>
    <p>Description: {{ $category['description'] }}</p>
    <p>
        <a href="/categories/{{ $category['id'] }}">Перейти -></a>
    </p>
</div>