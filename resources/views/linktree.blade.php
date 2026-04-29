<!DOCTYPE html>
<html lang="en">

<head>
    <title>Overheard.Beauty | Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background: #c5c6c8;
            font-family: 'DM Sans', sans-serif;
            /* min-height ganti pakai padding bawah besar supaya bg keliatan sampai habis */
            padding-bottom: 0;
        }

        .lt-frame {
            max-width: 34rem;
            background: #fff;
            border-radius: 1.5rem 1.5rem 0 0;
            /* Bikin frame selalu setidaknya setinggi viewport dikurangi padding atas */
            min-height: calc(100vh - 3rem);
            box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
        }

        .lt-avatar {
            width: 6rem;
            height: 6rem;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #f0f0f0;
        }

        .lt-btn {
            background: #f5f5f5;
            border-radius: 3rem;
            min-height: 3.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-decoration: none;
            color: #111;
            font-weight: 500;
            font-size: 0.9375rem;
            padding: 0.75rem 3rem;
            transition: background 0.15s, transform 0.15s;
            box-shadow: 0 0.125rem 0.75rem rgba(0, 0, 0, 0.07);
        }

        .lt-btn:hover {
            background: #ececec;
            color: #111;
            text-decoration: none;
            transform: translateY(-0.1rem);
        }

        .lt-btn-thumb {
            position: absolute;
            left: 0.375rem;
            width: 3rem;
            height: 3rem;
            border-radius: 1.25rem;
            overflow: hidden;
            background: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: 600;
            color: #fff;
            flex-shrink: 0;
        }

        /* Gambar di dalam thumb: reset semua class yg mungkin meluber */
        .lt-btn-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0;
            border: none;
            margin: 0;
            padding: 0;
        }

        .lt-btn-dots {
            position: absolute;
            right: 0.875rem;
            opacity: 0.35;
            font-size: 1.125rem;
        }

        .lt-social {
            background: none;
            border: none;
            padding: 0.375rem;
            cursor: pointer;
            transition: transform 0.15s;
        }

        .lt-social:hover {
            transform: scale(1.12);
        }

        .lt-social svg {
            width: 1.875rem;
            height: 1.875rem;
            fill: #111;
        }

        .lt-footer-btn {
            display: block;
            border: 1.5px solid #ddd;
            border-radius: 3rem;
            padding: 0.875rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.9375rem;
            color: #111;
            text-decoration: none;
            transition: box-shadow 0.15s;
        }

        .lt-footer-btn:hover {
            box-shadow: 0 0.25rem 1rem rgba(0, 0, 0, 0.1);
            color: #111;
            text-decoration: none;
        }

        .lt-topbar {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            border-radius: 1.5rem 1.5rem 0 0;
        }

        .lt-topbar-btn {
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.05);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .lt-topbar-btn svg {
            width: 1rem;
            height: 1rem;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-start pt-4 pt-md-5">

    <div class="lt-frame w-100 mx-2 mx-md-auto">

        <!-- TOP BAR -->
        <div class="lt-topbar d-flex justify-content-between align-items-center px-3 py-2">
            <button class="lt-topbar-btn">
                <svg viewBox="0 0 28 28" fill="currentColor">
                    <path
                        d="M15.76 6.83L20.43 2.03L23.14 4.8L18.24 9.48H25.14V13.33H18.21L23.14 18.12L20.43 20.85L13.73 14.12L7.04 20.85L4.32 18.13L9.26 13.34H2.33V9.48H9.23L4.32 4.8L7.04 2.03L11.71 6.83V0H15.76V6.83ZM11.71 18.85H15.76V28H11.71V18.85Z" />
                </svg>
            </button>
            <button class="lt-topbar-btn">
                <svg viewBox="0 0 256 256" fill="currentColor">
                    <path
                        d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                </svg>
            </button>
        </div>

        <!-- PROFILE -->
        <div class="text-center px-4 pt-4 pb-2">
            <img src="https://ugc.production.linktr.ee/85384b62-2203-4f10-908b-16184a0b32b2_14343d31ea036a66d58cb0937ab2c51a-tplv-tiktokx-cropcenter-720-720.jpeg?io=true&size=avatar-v3_0"
                alt="Overheard Beauty" class="lt-avatar mb-3">
            <h1 class="h4 font-weight-bold mb-1" style="font-family:'DM Serif Display',serif; letter-spacing:-0.02em;">
                Overheard.Beauty</h1>
            <p class="text-muted small mb-3">Serving hot beauty tea — sip the truth, skip the myths.</p>

            <div class="d-flex justify-content-center mb-3">
                <button class="lt-social" aria-label="Instagram">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C9.29 2 8.94 2 7.87 2.06 7.04 2.07 6.22 2.23 5.44 2.52 4.79 2.78 4.23 3.12 3.67 3.68 3.12 4.23 2.77 4.79 2.52 5.45 2.27 6.09 2.1 6.81 2.06 7.88 2.01 8.94 2 9.28 2 12c0 2.71 0 3.05.06 4.12.04 1.07.22 1.81.46 2.44.26.65.6 1.21 1.15 1.77.55.55 1.11.9 1.76 1.15.63.25 1.35.42 2.41.46C8.94 21.99 9.28 22 12 22c2.71 0 3.05 0 4.12-.06 1.06-.04 1.79-.22 2.43-.46.66-.25 1.27-.64 1.77-1.15.56-.56.9-1.12 1.15-1.76.25-.63.42-1.35.46-2.41C21.99 15.06 22 14.72 22 12c0-2.71-.01-3.05-.06-4.12-.02-.83-.18-1.65-.47-2.43-.25-.66-.64-1.27-1.15-1.77-.57-.56-1.11-.9-1.77-1.16-.78-.29-1.6-.44-2.43-.45C15.05 2.01 14.71 2 12 2zm-0.9 1.81H12c2.66 0 2.98 0 4.04.05.63.01 1.26.12 1.85.34.48.18.8.4 1.15.75.35.35.57.68.76 1.15.13.36.29.88.34 1.86.04 1.05.05 1.37.05 4.04 0 2.66 0 2.98-.05 4.04-.01.63-.12 1.26-.34 1.85-.18.48-.41.8-.76 1.15-.34.35-.67.57-1.15.75-.59.22-1.22.34-1.85.35-.96.04-1.28.05-4 .05-2.67 0-2.99 0-4.04-.05-.64-.01-1.27-.12-1.86-.34-.47-.19-.79-.41-1.15-.76-.34-.34-.57-.67-.75-1.15-.22-.59-.33-1.22-.34-1.86C3.81 14.98 3.79 14.66 3.79 12c0-2.67.02-2.99.06-4.04.01-.64.12-1.27.34-1.86.19-.47.41-.79.76-1.15.35-.34.62-.57 1.1-.75.59-.22 1.22-.33 1.86-.34C8.87 3.82 9.23 3.81 11.1 3.79V3.81zM17.34 5.47c-.32 0-.63.1-.89.3-.26.19-.46.47-.57.78-.11.31-.12.65-.03.97.09.32.27.6.53.81.25.21.56.34.89.36.33.02.65-.07.92-.26.27-.19.47-.46.58-.78.11-.32.11-.66 0-.98-.11-.32-.31-.59-.59-.78-.24-.27-.53-.42-.84-.42zM12 6.86c-.67 0-1.34.13-1.97.4-.62.25-1.18.63-1.66 1.11-.48.48-.86 1.04-1.11 1.66-.27.63-.4 1.3-.4 1.97 0 .67.13 1.34.4 1.97.25.62.63 1.18 1.11 1.66.48.48 1.04.86 1.66 1.11.63.27 1.3.4 1.97.4 1.36 0 2.67-.55 3.63-1.51.96-.96 1.51-2.27 1.51-3.63 0-1.36-.55-2.67-1.51-3.63C14.67 7.41 13.36 6.86 12 6.86zm0 1.81c.44 0 .87.09 1.27.25.41.17.78.42 1.08.73.31.3.56.67.73 1.08.16.4.25.83.25 1.27s-.09.87-.25 1.27c-.17.41-.42.78-.73 1.08-.3.31-.67.56-1.08.73-.4.16-.83.25-1.27.25-.88 0-1.73-.35-2.35-.98-.63-.62-.98-1.47-.98-2.35 0-.88.35-1.73.98-2.35.62-.63 1.47-.98 2.35-.98z" />
                    </svg>
                </button>
                <button class="lt-social" aria-label="TikTok">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M15.95 8.69V15.67C15.95 19.16 13.1 22 9.62 22 8.27 22 7.02 21.57 5.99 20.85 4.36 19.7 3.29 17.81 3.29 15.67c0-3.49 2.83-6.32 6.32-6.32.29 0 .57.02.86.05v3.51c-.12-.03-.29-.07-.42-.09H9.99c-1.59 0-2.89 1.26-2.89 2.86 0 1.6 1.3 2.9 2.9 2.9 1.6 0 2.9-1.3 2.9-2.9V2h3.44c0 .3.03.59.08.87.24 1.31 1.02 2.44 2.1 3.14.75.49 1.64.78 2.6.78v3.43c-1.78 0-3.43-.57-4.78-1.53h-.39z" />
                    </svg>
                </button>
                <button class="lt-social" aria-label="Email">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M4.31 7.28C4.14 7.62 4.07 7.99 4.03 8.41 4 8.84 4 9.36 4 10.01v3.98c0 .65 0 1.17.03 1.6.04.43.12.82.3 1.17.28.57.74 1.03 1.31 1.31.35.18.74.26 1.17.3.43.03.95.03 1.6.03h7.18c.65 0 1.17 0 1.6-.03.43-.04.82-.12 1.17-.3.57-.28 1.03-.74 1.31-1.31.18-.35.26-.74.3-1.17.03-.43.03-.95.03-1.6v-3.98c0-.65 0-1.17-.03-1.6-.04-.43-.11-.8-.28-1.13L13.9 12.02c-1.11.91-2.69.91-3.8 0L4.31 7.28z" />
                        <path
                            d="M18.96 6.33C18.78 6.17 18.58 6.04 18.36 5.93c-.35-.18-.74-.26-1.17-.3C16.76 5.6 16.24 5.6 15.59 5.6H8.41c-.65 0-1.17 0-1.6.03-.43.04-.82.12-1.17.3-.22.11-.42.24-.6.4l5.82 4.76c.66.54 1.62.54 2.28 0l5.82-4.76z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- LINKS -->
        <div class="px-3 pb-4 d-flex flex-column flex-grow-1" style="gap:0.75rem;">

            <a href="https://bit.ly/QuotesSubmissionOHB" target="_blank" class="lt-btn"> Quotes Submission 💌
                <span class="lt-btn-dots">⋮</span>
            </a>

            <a href="https://www.tiktok.com/@overheardbeauty" target="_blank" class="lt-btn">
                <div class="lt-btn-thumb">
                    <img src="https://ugc.production.linktr.ee/a41a4863-e8c2-43fe-b559-c544a7cf888c_14343d31ea036a66d58cb0937ab2c51a-tplv-tiktokx-cropcenter-720-720.jpeg?io=true&size=thumbnail-stack_v1_0"
                        alt="TikTok">
                </div>
                Overheard Beauty on TikTok
                <span class="lt-btn-dots">⋮</span>
            </a>

            <p class="text-center font-weight-bold mb-0 mt-2" style="font-size:0.9375rem;">Partner With Overheard Beauty
            </p>

            <a href="https://wa.me/6281188019206" target="_blank" class="lt-btn">
                <div class="lt-btn-thumb">
                    <img src="https://ugc.production.linktr.ee/a41a4863-e8c2-43fe-b559-c544a7cf888c_14343d31ea036a66d58cb0937ab2c51a-tplv-tiktokx-cropcenter-720-720.jpeg?io=true&size=thumbnail-stack_v1_0"
                        alt="TikTok">
                </div>
                Rian
                <span class="lt-btn-dots">⋮</span>
            </a>

            <a href="https://wa.me/6281110017379" target="_blank" class="lt-btn">
                <div class="lt-btn-thumb">
                    <img src="https://ugc.production.linktr.ee/ed1ffa22-587d-463d-8959-87fd9bb101db_y8-PTBaP90a.png?io=true&size=thumbnail-stack_v1_0"
                        alt="Calista">
                </div>
                Calista
                <span class="lt-btn-dots">⋮</span>
            </a>

        </div>

        <!-- FOOTER — mt-auto mendorong footer ke bawah frame -->
        <div class="px-3 pb-5 mt-auto">
            <a href="https://linktr.ee/Overheard.Beauty" target="_blank" class="lt-footer-btn mb-3 mx-auto d-block"
                style="max-width:70%;">Join Overheard.Beauty on Linktree</a>
            <div class="d-flex justify-content-center flex-wrap" style="gap:0.25rem; font-size:0.625rem; color:#888;">
                <button class="btn btn-link p-0" style="font-size:0.625rem; color:#888;">Cookie Preferences</button>
                <span>•</span>
                <a href="#" style="font-size:0.625rem; color:#888;">Report</a>
                <span>•</span>
                <a href="#" style="font-size:0.625rem; color:#888;">Privacy</a>
                <span>•</span>
                <button class="btn btn-link p-0" style="font-size:0.625rem; color:#888;">Explore</button>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
