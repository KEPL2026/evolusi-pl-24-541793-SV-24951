<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolusi PL | Praktik Pengembangan Modern</title>
    <style>
        :root { color-scheme: dark; --ink:#e9f0ff; --muted:#a9b7d0; --accent:#65e6b5; --purple:#9b8cff; --panel:rgba(255,255,255,.08); }
        * { box-sizing:border-box; } body { margin:0; font-family: Inter, ui-sans-serif, system-ui, sans-serif; color:var(--ink); background:radial-gradient(circle at 80% 10%, #28366f 0, #11152e 38%, #080b18 75%); min-height:100vh; }
        .wrap { width:min(1100px, 92%); margin:auto; } nav { display:flex; justify-content:space-between; align-items:center; padding:28px 0; } .brand { font-weight:800; letter-spacing:.08em; } .badge { color:var(--accent); border:1px solid rgba(101,230,181,.35); border-radius:999px; padding:8px 14px; font-size:.82rem; }
        main { padding:62px 0 90px; } .eyebrow { color:var(--accent); text-transform:uppercase; letter-spacing:.18em; font-weight:700; font-size:.78rem; } h1 { max-width:780px; margin:18px 0; font-size:clamp(2.6rem, 7vw, 5.8rem); line-height:.98; letter-spacing:-.06em; } h1 span { color:var(--purple); } .lead { max-width:650px; color:var(--muted); font-size:1.15rem; line-height:1.7; }
        .cta { display:inline-flex; gap:12px; align-items:center; margin-top:24px; padding:13px 18px; border-radius:12px; color:#08141a; background:var(--accent); font-weight:800; text-decoration:none; transition:transform .2s ease, box-shadow .2s ease; } .cta:hover { transform:translateY(-2px); box-shadow:0 12px 30px rgba(101,230,181,.25); } .grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; margin-top:60px; } .card { background:var(--panel); border:1px solid rgba(255,255,255,.12); border-radius:22px; padding:25px; backdrop-filter:blur(14px); } .number { color:var(--accent); font-weight:800; font-size:.8rem; } h2 { font-size:1.25rem; margin:16px 0 9px; } .card p { color:var(--muted); line-height:1.6; margin:0; } footer { color:var(--muted); font-size:.9rem; padding:25px 0; border-top:1px solid rgba(255,255,255,.1); }
        @media(max-width:700px){ .grid{grid-template-columns:1fr;} main{padding-top:30px;} nav{padding:20px 0;} }
    </style>
</head>
<body>
    <div class="wrap">
        <nav><div class="brand">EVOLUSI PL</div><div class="badge">Laravel · CI Ready</div></nav>
        <main>
            <div class="eyebrow">Perangkat lunak yang terus bertumbuh</div>
            <h1>Bangun lebih baik,<br><span>selangkah demi selangkah.</span></h1>
            <p class="lead">Evolusi PL adalah landing page sederhana untuk mendemonstrasikan praktik pengembangan perangkat lunak modern: kolaboratif, teruji, dan siap beradaptasi.</p>
            <a class="cta" href="#principles">Jelajahi prinsip <span aria-hidden="true">→</span></a>
            <section id="principles" class="grid" aria-label="Prinsip pengembangan">
                @foreach ($principles as $index => $principle)
                    <article class="card"><div class="number">0{{ $index + 1 }}</div><h2>{{ $principle['title'] }}</h2><p>{{ $principle['text'] }}</p></article>
                @endforeach
            </section>
        </main>
        <footer>© {{ date('Y') }} Evolusi PL · Dibangun dengan Laravel.</footer>
    </div>
</body>
</html>
