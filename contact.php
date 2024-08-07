<?php
$title = 'Montage Studio';
$bodyclass = 'contact';
$MetaTitle = 'Montage Studio';
$Metadescription = 'Montage Studio';
$MetaImage = '';
$MetaUrl = '';
include( "header.php" );
?>
<main>
  <div class="section " >
    <div class=" full_section">
      <div class="bg-white full_section  " >
        <div class="section_article full_section d-flex align-items-start justify-content-start" >
          <div class="bg" style="background-image: url('images/contact-bg.jpg'); background-position: center center" > 
            <video src="media/contact-video.mp4"type="video/mp4" preload="metadata" muted autoplay playsinline webkit-playsinline loop   ></video>
          </div>
          <div class="content" >
            <div class="block_caption dark_layout" >
              <div class="paragraph" >
                <h2 class="mb-1 fs-5 title" ><b>Contact</b></h2>
                <p class="mb-0" ><b>Email:</b> <a href="#" class="link" >montagestudio@gmail.com</a></p>
                <p><b>Phone:</b> <a href="#" class="link" >+917718914145</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
sessionStorage.setItem("FromPreviousPage", "true");
</script>
<?php include("footer.php"); ?>
