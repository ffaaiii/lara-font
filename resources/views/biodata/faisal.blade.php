<!doctype html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Biodata Diri — Template</title>
    <style>
        :root {
            --bg: #0f1724;
            --card: #0b1220;
            --muted: #9aa4b2;
            --accent: #7c3aed;
            --glass: rgba(255, 255, 255, 0.03);
            --radius: 14px;
            color-scheme: dark;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%;
            margin: 0;
            background: linear-gradient(180deg, #071129 0%, #071826 60%);
            color: #e6eef6
        }

        .wrap {
            max-width: 980px;
            margin: 40px auto;
            padding: 28px;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 24px
        }

        @media (max-width:820px) {
            .wrap {
                grid-template-columns: 1fr;
                padding: 18px;
                margin: 18px 12px
            }
        }

        .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border-radius: var(--radius);
            padding: 22px;
            box-shadow: 0 6px 22px rgba(0, 0, 0, 0.6)
        }

        .profile {
            display: flex;
            flex-direction: column;
            gap: 18px
        }

        .avatar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .avatar img {
            width: 140px;
            height: 140px;
            border-radius: 18px;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.06);
            background: var(--glass)
        }

        h1 {
            font-size: 20px;
            margin: 6px 0 0
        }

        p.role {
            color: var(--muted);
            margin: 6px 0 0
        }

        .info {
            display: grid;
            gap: 8px
        }

        .pill {
            background: rgba(255, 255, 255, 0.02);
            padding: 8px 10px;
            border-radius: 10px;
            color: var(--muted);
            font-size: 13px
        }

        .main {
            display: flex;
            flex-direction: column;
            gap: 18px
        }

        .section {
            display: grid;
            gap: 10px
        }

        .section h2 {
            margin: 0;
            font-size: 16px
        }

        .section .content {
            background: var(--card);
            padding: 14px;
            border-radius: 12px
        }

        .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px
        }

        .tag {
            background: rgba(255, 255, 255, 0.03);
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 13px
        }

        footer {
            margin-top: 10px;
            color: var(--muted);
            font-size: 13px;
            text-align: center
        }

        [contenteditable] {
            outline: none
        }

        .editable:focus {
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.12);
            border-radius: 8px
        }
    </style>
</head>

<body>
    <div class="wrap">
        <aside class="card profile">
            <div class="avatar">
                <img id="photo" alt="foto profil"
                    src="assets/images/WIN_20250806_15_02_17_Pro.jpg"/>
            </div>
            <div>
                <h1 contenteditable class="editable" id="fullName">Muhammad Faisal Nur Karim</h1>
                <p class="role editable" contenteditable id="jobTitle">Pelajar</p>
            </div>

            <div class="info">
                <div class="pill editable" contenteditable id="address">Jln Cimanuk blk 65</div>
                <div class="pill editable" contenteditable id="birth">Garut, 17 Agustus 2008</div>

                <div class="contact-list">
                    <div class="contact-item"><strong>Email:</strong> <span class="spacer"></span> <span contenteditable
                            class="editable" id="email">muhammadfaisalnurkarim@gmail.com</span></div>
                    <div class="contact-item"><strong>Telepon:</strong> <span class="spacer"></span> <span
                            contenteditable class="editable" id="phone">0896 6220 2697</span></div>
                    <div class="contact-item"><strong>GitHub:</strong> <span class="spacer"></span> <span
                            contenteditable class="editable" id="github">https://github.com/ffaaiii</span></div>
                </div>
            </div>
        </aside>

        <main class="main">
            <div class="card section">
                <h2>Ringkasan</h2>
                <div class="content">
                    <p contenteditable class="editable" id="summary">Saya adalah siswa SMK jurusan Pengembangan Perangkat Lunak & Gim (PPLG) yang memiliki ketertarikan pada pemrograman,
                    desain antarmuka, serta pengembangan aplikasi dan gim. Terbiasa menggunakan bahasa pemrograman seperti HTML, CSS, dan
                    JavaScript, serta mempelajari teknologi lain untuk mendukung proses pembuatan perangkat lunak. Saya senang bekerja dalam
                    tim, memiliki rasa ingin tahu yang tinggi, dan bersemangat untuk terus belajar hal baru di bidang teknologi.</p>
                </div>
            </div>

            <div class="card section">
                <h2>Pendidikan</h2>
                <div class="content" id="educationList">
                    <div class="edu-item">
                        <strong contenteditable class="editable">SMK Negri 1 Garut</strong> — <em contenteditable
                            class="editable">Pengembangan Perangkat Lunak & Gim</em>
                        <div class="meta" style="margin-top:8px"><span class="tag editable" contenteditable>2024 —
                                2026</span></div>
                    </div>
                </div>
            </div>

            <div class="card section" style="display:flex;gap:14px;flex-wrap:wrap">
                <div style="flex:1;min-width:220px">
                    <h2>Keahlian</h2>
                    <div class="content" id="skills">
                        <div class="meta">
                            <span class="tag editable" contenteditable>HTML</span>
                            <span class="tag editable" contenteditable>CSS</span>
                            <span class="tag editable" contenteditable>JavaScript</span>
                            <span class="tag editable" contenteditable>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div style="flex:1;min-width:220px">
                    <h2>Hobi</h2>
                    <div class="content" id="extras">
                        <p contenteditable class="editable">Bermain game</p>
                    </div>
                </div>
            </div>

            <footer>
                Edit konten langsung pada bidang yang bertanda — klik teks untuk mengubah.
            </footer>
        </main>

    </div>
    <script>
        document.getElementById('photo').addEventListener('dblclick', () => {
            const inp = document.createElement('input');
            inp.type = 'file';
            inp.accept = 'image/*';
            inp.onchange = e => {
                const f = e.target.files[0];
                if (!f) return;
                const reader = new FileReader();
                reader.onload = ev => { document.getElementById('photo').src = ev.target.result; }
                reader.readAsDataURL(f);
            }
            inp.click();
        });

        document.addEventListener('focusin', (e) => {
            if (e.target.classList && e.target.classList.contains('editable')) {
                e.target.classList.add('editable-focus');
            }
        });
        document.addEventListener('focusout', (e) => {
            if (e.target.classList && e.target.classList.contains('editable')) {
                e.target.classList.remove('editable-focus');
            }
        });
    </script>
</body>

</html>