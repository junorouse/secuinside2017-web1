<?php
require_once("config.php");

$proudct = [];
$product['pmac'] = "PineApple Mac";
$product['ppad'] = "PinApple Pad";
$product['pwatch'] = "PinApple Watch";
$product['ptv'] = "PinApple Tv";
$product['pmusic'] = "PinApple Music";
$pid = $_GET['pid'];


include("header.php");
?>

<section class="section">
  <div class="container">
    <h1 class="title"><?php echo $product[$pid]; ?></h1>
    <hr>
    <div class="columns">
        <div class="column">
        <?php
            switch($pid) {
                case 'pmac':
                    echo '<img src="pmac.png">';
                    break;
                case 'ppad':
                    echo '<img src="ppad.png">';
                    break;
                case 'pwatch':
                    echo '<img src="pwatch.png">';
                    break;
                case 'ptv':
                    echo '<img src="ptv.png">';
                    break;
                case 'pmusic':
                    echo '<img src="pmusic.png">';
                    break;
                default:
                    echo 'This is not our product';
            }
        ?>
        </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
