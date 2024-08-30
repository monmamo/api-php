<?php
$jsonFiles = \glob("decks/{$id}.json");

if (\count($jsonFiles) === 0) {
    exit("Deck {$card_id} not found.");
}

$data = \json_decode(\file_get_contents($jsonFiles[0]), true);

if ($data === null) {
    exit("Error decoding JSON for deck {$card_id} from file {$jsonFiles[0]}.");
}

\extract($data);

$total_count = 0;

?>
<script src="https://unpkg.com/htmx.org@2.0.2"></script>
<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" hx-boost="true" hx-target="#right-section" hx-swap="innerHTML">
    <li><strong><?php echo $name ?? 'UNKNOWN DECK'; ?></strong></li>
    <?php
    foreach ($cards as $card_id => $count) {
        $total_count += $count;
        $card_info = \get_card_data(card_id: $card_id);
        ?>
        <li><a href="show.php?card_id=<?php echo $card_id; ?>" class="card-link link-body-emphasis d-inline-flex text-decoration-none rounded"><?php echo $count; ?> <?php echo $card_id; ?> <?php echo $card_info->name ?? ''; ?> </a></li>
    <?php } ?>
    <li>Total count <?php echo $total_count; ?></li>
</ul>
<?php
