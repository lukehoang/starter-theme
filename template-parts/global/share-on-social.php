
<?php
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
      $link = "http";
// Here append the common URL characters.
$link .= "://";
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
?>
<div class="dropdown dropdown--btn">
    <button class="btn btn-outline-dark custom-btn-outline bg-white d-flex align-items-center mx-auto fw-bold text-med-gray  dropdown-toggle" id="btn_share-on-social" data-bs-toggle="dropdown" aria-expanded="false">SHARE ON SOCIAL</button>
    <ul class="dropdown-menu" aria-labelledby="btn_share-on-social">
        <li><a class="dropdown-item icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=$link?>/" target="_blank">Facebook</a></li>
        <!-- <li><a class="dropdown-item icon-instagram" href="#">Instagram</a></li> -->
        <li><a class="dropdown-item icon-X" href="https://twitter.com/intent/tweet?text=Portraits of Cancer&url=<?=$link?>" target="_blank">X</a></li>
        <li><a class="dropdown-item icon-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?=$link?>" target="_blank">Linkedin</a></li>
        <li><a class="dropdown-item icon-email" href="mailto:?body=<?=$link?>">Email</a></li>
    </ul>
</div>