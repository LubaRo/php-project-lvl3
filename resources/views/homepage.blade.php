<x-layout>
    <h1>Page analyzer</h1>

    <div>
        Check sites SEO for free
    </div>

    <form method="POST" action="/url" class="main-form d-flex justify-content-center my-3">
        @csrf
        <input class="form-control form-control-lg" name="url[name]" type="text" placeholder="https://example.com">
        <button class="btn btn-lg btn-primary ms-3 px-5 text-uppercase" type="submit">Check</button>
    </form>
</x-layout>
