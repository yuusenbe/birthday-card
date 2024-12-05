<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
<title>To Hamizah</title>
<style>
    body {
        font-family: 'EB Garamond';
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        text-align: center;
    }

    .card-container {
        perspective: 1000px;
        width: 350px;
        height: 500px;
    }

    .card {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.6s;
        cursor: pointer;
    }

    .card.is-flipped {
        transform: rotateY(180deg);
    }

    .card-side {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        padding: 20px;
        box-sizing: border-box;
    }

    .card-front img {
        width: 100%;
        border-radius: 8px;
    }

    .card-front h1 {
        font-size: 24px;
        color: #333;
        margin-top: 10px;
    }

    .card-front p {
        font-size: 16px;
        color: #777;
    }

    .card-back {
        transform: rotateY(180deg);
        background-color: #fff;
    }

    .card-back h2 {
        font-size: 20px;
        color: #333;
    }

    .card-back p {
        font-size: 16px;
        color: #555;
        text-align: center;
    }
</style>
</head>
<body>
<div class="card-container">
    <div class="card" id="card">
        <!-- Front Side -->
        <div class="card-side card-front">
            <img src="{{ asset('images/butterfly-design.png') }}" alt="Butterfly">
            <h1>My Butterfly</h1>
            <p>I know you may sound cliche by now, but you are indeed as beautiful and delicate just like how butterfly is. </p>
        </div>
        <!-- Back Side -->
        <div class="card-side card-back">
            <h2>Happy Belated Birthday</h2>
            <p>
                Dear Hamizah,<br>
                As I was repeatedly watching your SPM vlogs, I felt like you need these to accompany you when you are all alone there! Please take care of your health as much as you will take care of this succulents! I love you and please know that I am always here for you okaaaay. <br>
                <br>
                Sincerely, your lovely Aleya comel. Ehet.
            </p>
        </div>
    </div>
</div>

<script>
    const card = document.getElementById('card');

    card.addEventListener('click', () => {
        card.classList.toggle('is-flipped');
    });
</script>
</body>
</html>
