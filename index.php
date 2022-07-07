<?php
$par = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae ullamcorper nisl, vitae laoreet eros. In id fermentum eros. Vivamus et consequat magna. Curabitur semper nisl et est maximus volutpat. Donec dictum pharetra sodales. Sed fermentum aliquam enim, vel fringilla lectus ultrices vitae. Maecenas tincidunt quam vitae massa ultricies fermentum. Nullam facilisis mi ligula, vitae pretium sem ornare at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc at magna dignissim, placerat purus vitae, scelerisque augue. Morbi quis pharetra eros. Sed tincidunt nec magna vel sagittis. Mauris sit amet est euismod, mollis enim sed, imperdiet dui. Duis eget est non nunc vestibulum sodales.";
$badword = $_GET["badword"];
echo $par;

if(stripos($par, $badword) !== false) {
    $par = str_replace($badword, "***", $par);
};
?>


<p><?php echo $par . " " . "Lunghezza paragrafo:" . strlen($par) ?></p>