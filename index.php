<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./asset/image/balon.png">
    <link rel="stylesheet" href="./asset/styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Ulang Tahun ...</title>
</head>

<body>
    <header>
        <div class="greet">Selamat Ulang Tahun ke 22</div>
        <div>
            <article class="card center">
                <div class="carousel-slider">
                    <div class="slider">
                        <img src="./asset/image/septina.jpg" alt="slider_1">
                    </div>
                    <div class="slider">
                        <img src="./asset/image/septina2.jpeg" alt="slider_2">
                    </div>
                    <div class="slider">
                        <img src="./asset/image/septina3.jpeg" alt="slider_3">
                    </div>
                    <a class="prev" onclick="move(-1)">&#10094;</a>
                    <a class="next" onclick="move(1)">&#10095;</a>
                </div>

                <div class="name">Septina Shinta Monica</div>


            </article>
        </div>
    </header>

    <main>
        <p>Selamat Ulang Tahun</p>
        <div class="audio">
            <audio controls>
                <source src="./asset/audio/ucapan.mpeg" type="audio/mpeg">
            </audio>
        </div>
        <p>Lagu Jamrud</p>
        <div class="audio">
            <audio controls>
                <source src="./asset/audio/jamrud1.mp3" type="audio/mpeg">
            </audio>
        </div>

    </main>

    <footer>
        <p>ultah-22&#169;18-09-2022</p>
    </footer>
    <script src="asset/styles/script.js"></script>
    <script>
        window.alert("Selamat Ulang Tahun Septina Shinta Monica ...");
    </script>
</body>

</html>