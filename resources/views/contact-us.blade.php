<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    {{-- form contact us --}}
    <h1>Contact Us</h1>
    <p>Hubungi kami melalui form dibawah ini</p>
    <form action="/contact-us" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        </div>
    @endif
</body>
</html>