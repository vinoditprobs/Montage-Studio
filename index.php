<?php
$title = 'Montage Studio';
$bodyclass = 'homepage hide_header_footer';
$MetaTitle = 'Sparkt';
$Metadescription = 'Sparkt';
$MetaImage = '';
$MetaUrl = '';
include( "header.php" );
?>
<div class="intro_page" id="intro_page" onclick="offIntro()" style="background-image: url('images/side-nav-bg.jpeg')"  >
  <div class="bg"  >
    <video poster="media/intro-video.jpg" id="introVideo" muted="muted" playsinline="" src="media/intro-video.mp4" type="video/mp4" ></video>
  </div>
</div>
<script>
var showInfo = sessionStorage.getItem("FromPreviousPage");
//console.log(showInfo);
if(showInfo == null){
		
  window.addEventListener('load', (event) => {
    var vid = document.getElementById("introVideo");
    vid.controls = false;

    setTimeout(function () {
      vid.play();
    }, 100);

    setInterval(function () {
      vid.play();
    }, 5000);

  });

  function offIntro() {
    var introPage = document.getElementById("intro_page");
    introPage.classList.add('close');
    setTimeout(function () {
      introPage.style.display = "none";
    }, 500);
  }
	
} else{
	var introPage = document.getElementById("intro_page");
	introPage.style.display = "none";
}
	
</script>
<main>
  <div class="side_nav_section d-flex" >
    <div class="side_nav d-none d-lg-block sticky-top" >
      <article class="section_article" >
        <div class="bg opacity5 fixed" style="background-image: url('images/side-screen.jpg'); background-position: center center;" ></div>
        <div class="content d-flex h-100 w-100 flex-wrap" >
          <div class="mb-auto w-100" >
            <div class="mb-5" > <a href="index.php" class="main_logo">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="453.099" height="282.349" viewBox="0 0 453.099 282.349">
                <defs>
                  <linearGradient id="linear-gradient" x1="-0.059" y1="-0.014" x2="0.95" y2="1.049" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#6669ff"/>
                    <stop offset="1" stop-color="#66c5ff"/>
                  </linearGradient>
                </defs>
                <path id="Path_1" data-name="Path 1" d="M294.268,435.368H457.335l30.889,53.513,30.909-53.513H683V546.145l4.914-3.931L747.367,507.9V645.189l-59.451-34.318L683,606.939V717.717H533.835l22.063-38.21h88.895V473.578h-2.708l.08.1H541.055l-36.284,62.861L488.224,565.16,471.7,536.537l-36.284-62.861H332.478v205.83H420.57l22.043,38.21H294.268ZM613.884,648.96,570.9,574.506l22.124-38.31H548.978L488.224,641.438,427.49,536.2H383.424l22.123,38.33v-.02L362.564,648.96h44.247l17.631-30.548,3.229-5.6L471.7,689.095l16.527,28.622,16.548-28.622L548.8,612.836l3.209,5.576,17.631,30.548Z" transform="translate(-294.268 -435.368)" fill-rule="evenodd" fill="url(#linear-gradient)"/>
              </svg>
              </a></div>
            <nav class="side_nav"  >
              <ul>
                <li><a href="index.php" class="nav_link active" >Home
                  <svg class="nav_underlinine" xmlns="http://www.w3.org/2000/svg" width="389.9833" height="51.6125" viewBox="0 0 389.9833 51.6125" preserveAspectRatio="none" style="">
                    <path d="M6.697,10.2755,386.9679.453C356.6,8.9365,325.1665,13.1211,293.7054,15.216c-27.8931,1.8573-55.8658,2.09-83.82,2.3228L.0037,19.2839,329.2261,22.55C253.3036,42.1961,173.6777,40.6567,95.9721,51.2409"></path>
                  </svg>
                  </a></li>
                <li><a href="about.php" class="nav_link about" >About
                  <svg class="nav_underlinine" xmlns="http://www.w3.org/2000/svg" width="389.9833" height="51.6125" viewBox="0 0 389.9833 51.6125" preserveAspectRatio="none" style="">
                    <path d="M6.697,10.2755,386.9679.453C356.6,8.9365,325.1665,13.1211,293.7054,15.216c-27.8931,1.8573-55.8658,2.09-83.82,2.3228L.0037,19.2839,329.2261,22.55C253.3036,42.1961,173.6777,40.6567,95.9721,51.2409"></path>
                  </svg>
                  </a></li>
                <li><a href="projects.php" class="nav_link projects" >Projects
                  <svg class="nav_underlinine" xmlns="http://www.w3.org/2000/svg" width="389.9833" height="51.6125" viewBox="0 0 389.9833 51.6125" preserveAspectRatio="none" style="">
                    <path d="M6.697,10.2755,386.9679.453C356.6,8.9365,325.1665,13.1211,293.7054,15.216c-27.8931,1.8573-55.8658,2.09-83.82,2.3228L.0037,19.2839,329.2261,22.55C253.3036,42.1961,173.6777,40.6567,95.9721,51.2409"></path>
                  </svg>
                  </a></li>
                <li><a href="contact.php" class="nav_link contact" >Contact
                  <svg class="nav_underlinine" xmlns="http://www.w3.org/2000/svg" width="389.9833" height="51.6125" viewBox="0 0 389.9833 51.6125" preserveAspectRatio="none" style="">
                    <path d="M6.697,10.2755,386.9679.453C356.6,8.9365,325.1665,13.1211,293.7054,15.216c-27.8931,1.8573-55.8658,2.09-83.82,2.3228L.0037,19.2839,329.2261,22.55C253.3036,42.1961,173.6777,40.6567,95.9721,51.2409"></path>
                  </svg>
                  </a></li>
              </ul>
            </nav>
          </div>
          <div class="mt-auto w-100" >
            <div class="d-flex align-items-center" > <a href="#" class="social_link me-3" ><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="#" class="social_link me-3" ><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="#" class="social_link me-3" ><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </div>
          </div>
        </div>
      </article>
    </div>
    <div class="section" >
      <div class="container-fluid g-0" >
        <div class="row g-0" >
          <div class="col-md-12 col-lg-4 d-none d-lg-block " >
            <div class="highlight_column sticky-top" > <a data-fancybox class="section_article videolink d-flex align-items-end" href="https://youtu.be/pae_V2OWEEo" >
              <div class="bg opacity3" >
                <video poster="media/highlights.jpg" autoplay="autoplay" loop="loop" muted="muted" playsinline="" src="media/highlights.mp4" type="video/mp4" ></video>
              </div>
              <div class="content" >
                <div class="block_caption dark_layout" >
                  <h1 class="title" >Showreel</h1>
                 <!-- <div class="sub_text" >Lorem ipsum</div>-->
                </div>
              </div>
              </a> </div>
          </div>
          <div class="col-md-12 col-lg-8 overflow-hidden" >
            <div class="row " >
              <div class="col-sm-12 d-block d-md-block d-lg-none" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/pae_V2OWEEo" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3 " style="background-image:url('media/highlights.jpg')"  >
                      <video loop="loop" muted="muted" playsinline="" src="media/highlights.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" >Showreel</span></h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a href="https://www.netflix.com/in/title/81290263?trkid=13747225&s=i&t=wha&vlang=en&clip=81310688" target="_blank" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3 " style="background-image:url('media/highlights/door-ke-darshan.jpg')"  >
                      <video loop="loop" muted="muted" playsinline="" src="media/highlights/door-ke-darshan.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/netflix.png" alt="Netflix" title="Netflix" ></span> Door Ke Darshan</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/sVzYhb7IlRc" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3 " style="background-image:url('media/highlights/audi.jpg')"  >
                      <video poster="media/highlights/audi.jpg"  loop="loop" muted="muted" playsinline="" src="media/highlights/audi.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/audi.png" alt="Audi" title="Audi"></span> Etron</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/ukNi9MmrUV8" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3 " style="background-image:url('media/highlights/dulux.jpg')" >
                      <video  loop="loop" muted="muted" playsinline="" src="media/highlights/dulux.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/dulux.png" alt="Dulux" title="Dulux" ></span> Super Clean</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/zPNHpr1oHFg" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3 " style="background-image:url('media/highlights/sarva.jpg')"  >
                      <video  loop="loop" muted="muted" playsinline="" src="media/highlights/sarva.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/sarva.png" alt="Sarva" title="Sarva" ></span> Yes It's Yoga</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/AMXkrovT0F4" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3 " style="background-image:url('media/highlights/parachute-onion-hair-oil.jpg')"  >
                      <video  loop="loop" muted="muted" playsinline="" src="media/highlights/parachute-onion-hair-oil.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/parachute-oil.png" alt="Parachute" title="Parachute"></span> Advansed Onion Hair Oil</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/mJdm3Bte7ok" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3" style="background-image:url('media/highlights/birla-diwali.jpg')" >
                      <video  loop="loop" muted="muted" playsinline="" src="media/highlights/birla-diwali.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/birla-tmt.png" alt="Birla TMT" title="Birla TMT" > </span> TMT Steel</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-12" >
                <div class="ratio ratio-21x8">
                  <div class="bg-white" > <a data-fancybox href="https://youtu.be/SL0mn53aUoQ" class="section_article videolink d-flex align-items-end" >
                    <div class="bg opacity3" style="background-image:url('media/highlights/cannon.jpg')" >
                      <video loop="loop" muted="muted" playsinline="" src="media/highlights/cannon.mp4" type="video/mp4" ></video>
                    </div>
                    <div class="content" >
                      <div class="block_caption dark_layout" >
                        <h2 class="sub_title title" ><span class="brand" ><img src="images/brands/canon.png" alt="Canon" title="Canon" ></span> Business Minded</h2>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include("footer.php"); ?>
