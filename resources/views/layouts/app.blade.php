<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi Kelas XI RPL 1</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
        body { background-color: #f8fbff; color: #102d50; line-height: 1.6; }

        /* Header */
        .site-header { background: #0b3d6e; color: white; padding: 20px 7%; border-bottom: 4px solid #d4af37; }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        .site-header nav a { color: white; text-decoration: none; margin-left: 15px; font-weight: 600; }
        .site-header nav a:hover { color: #d4af37; }

        /* Section */
        .section { padding: 40px 7%; text-align: center; }
        .bg-light { background-color: #eef4fb; }
        .section h2 { margin-bottom: 20px; color: #0b3d6e; }

        /* Card & Grid */
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: 10px auto; max-width: 500px; }
        .grid-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; }

        /* Kontak & Footer */
        .contact-list { list-style: none; background: white; padding: 20px; display: inline-block; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        footer { background: #0b3d6e; color: white; text-align: center; padding: 15px; margin-top: 30px; }
    </style>
</head>
<body>

    <!-- Memanggil Header -->
    @include('partials.header')

    <!-- Memanggil Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Memanggil Footer -->
    @include('partials.footer')

</body>
</html>
