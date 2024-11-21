<?php
require 'header.php';
?>

<div class="container">
    <h1>Le weekend de Julia, Plume et Cocorico</h1>

    <div class="gallery">
        <?php
        $cards = [
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p1.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p2.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p3.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p4.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p5.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p6.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p7.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p8.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p9.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p10.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p11.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ],
            [
                "title" => "The Pigeon Saga",
                "image" => "plume/p12.jpg",
                "alt" => "The Pigeon Saga",
                "caption" => "Pigeons with a great Story"
            ]
        ];

        foreach ($cards as $card):
        ?>
            <div class="card">
                <figure>
                    <h3 class="card-title"><?= $card["title"]; ?></h3>
                    <img src="<?= $card["image"]; ?>" alt="<?= $card["alt"]; ?>" />
                    <figcaption><?= $card["caption"]; ?></figcaption>
                </figure>
            </div>
        <?php endforeach; ?>
    </div>

    <footer class="footer">
        <p>
            <h2>Pigeon Forever</h2>
        </p>
    </footer>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let cards = document.querySelectorAll('.card');
        let pastelColors = ['#7C9ACC', '#90B7CF', '#B3DDCD', 
                            '#D0E7DA', '#E8BED3', '#FADADD', 
                            '#FBE7B2', '#FFD7A5', '#E7FBBE', 
                            '#B5EAD7', '#C3B1E1', '#A4B0F5', 
                            '#B0E0E6', '#FFDFBA', '#FFC0CB', 
                            '#FFE4E1', '#F0E68C', '#E6E6FA', 
                            '#FFF5BA', '#D8BFD8', '#FF9AA2', 
                            '#B5D8EB', '#FAFAD2', '#D3E0EA',
                            '#99C1DE'];

        let previousColorIndex = -1;

        cards.forEach(function(card) {
            let randomColorIndex;
            do {
                randomColorIndex = Math.floor(Math.random() * pastelColors.length);
            } while (randomColorIndex === previousColorIndex);
        
            card.style.backgroundColor = pastelColors[randomColorIndex];
            previousColorIndex = randomColorIndex;
        });
    });
</script>

<?php
require 'footer.php';
?>
