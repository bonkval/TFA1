<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'POS Lab') ?></title>
    <style>
        :root { --ink: #182230; --muted: #617085; --accent: #0f766e; --accent-dark: #115e59; --surface: #ffffff; --bg: #f4f7f7; --line: #dbe5e4; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); background: var(--bg); font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        header { background: var(--surface); border-bottom: 1px solid var(--line); }
        .nav { max-width: 1100px; margin: auto; padding: 18px 24px; display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .brand { color: var(--ink); font-size: 1.2rem; font-weight: 800; text-decoration: none; letter-spacing: -.02em; }
        nav { display: flex; flex-wrap: wrap; gap: 8px; }
        nav a { color: var(--muted); text-decoration: none; padding: 9px 12px; border-radius: 8px; font-size: .95rem; }
        nav a:hover, nav a.active { color: var(--accent-dark); background: #e6f4f2; }
        main { max-width: 1100px; margin: 0 auto; padding: 64px 24px 80px; }
        .eyebrow { color: var(--accent); font-weight: 800; letter-spacing: .1em; text-transform: uppercase; font-size: .76rem; }
        h1 { font-size: clamp(2.2rem, 5vw, 4.4rem); line-height: 1.02; letter-spacing: -.05em; margin: 12px 0 20px; max-width: 700px; }
        h2 { font-size: 2rem; letter-spacing: -.03em; margin: 0 0 12px; }
        p { color: var(--muted); line-height: 1.7; max-width: 700px; }
        .hero, .card { background: var(--surface); border: 1px solid var(--line); border-radius: 18px; padding: 36px; box-shadow: 0 12px 30px rgba(24,34,48,.05); }
        .hero { background: linear-gradient(135deg, #ecf9f7, #fff 65%); }
        .button { display: inline-block; margin-top: 16px; color: white; background: var(--accent); text-decoration: none; border-radius: 9px; padding: 12px 17px; font-weight: 700; }
        .button:hover { background: var(--accent-dark); }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 18px; margin-top: 28px; }
        .feature h3 { margin: 0 0 8px; }
        .feature p { margin: 0; font-size: .95rem; }
        .table-wrap { overflow-x: auto; background: var(--surface); border: 1px solid var(--line); border-radius: 16px; box-shadow: 0 12px 30px rgba(24,34,48,.05); }
        table { width: 100%; border-collapse: collapse; min-width: 620px; }
        th, td { text-align: left; padding: 17px 20px; border-bottom: 1px solid var(--line); }
        th { color: var(--muted); font-size: .78rem; letter-spacing: .08em; text-transform: uppercase; background: #f8fbfb; }
        tr:last-child td { border-bottom: 0; }
        .pill { display: inline-block; color: var(--accent-dark); background: #e6f4f2; border-radius: 999px; padding: 5px 10px; font-size: .85rem; font-weight: 700; }
        footer { max-width: 1100px; margin: auto; padding: 0 24px 32px; color: var(--muted); font-size: .9rem; }
        @media (max-width: 680px) { .nav { align-items: flex-start; flex-direction: column; } main { padding-top: 34px; } .hero, .card { padding: 24px; } }
    </style>
</head>
<body>
<header>
    <div class="nav">
        <a class="brand" href="<?= base_url('/') ?>">POS Lab</a>
        <nav aria-label="Main navigation">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
        </nav>
    </div>
</header>
<main><?= $this->renderSection('content') ?></main>
<footer>CodeIgniter 4 MVC laboratory activity · Static arrays are used as temporary data sources.</footer>
</body>
</html>
