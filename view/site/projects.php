<script>
  $("body").on('click','.collapsible',function() {
            console.log("TOTO");
      $(this).toggleClass("active");
      var content = $(this).next();

      if (content.css('display') === "block") {
        content.css('display', "none");
      } else {
        content.css('display', "block");
      }
  });
  // $(".collapsible").click(function() {
  //     console.log("TOTO");
  //     $(this).toggleClass("active");
  //     var content = $(this).nextElementSibling;
  //     if (content.style.display === "block") {
  //       content.style.display = "none";
  //     } else {
  //       content.style.display = "block";
  //     }

  // });
  // console.log("HELLO");
  // var coll = document.getElementsByClassName("collapsible");
  // console.log(coll.length);
  // var i;

  // for (i = 0; i < coll.length; i++) {
  //   console.log(i);
  //   coll[i].addEventListener("click", function() {
  //     console.log("toto");
  //     this.classList.toggle("active");
  //     var content = this.nextElementSibling;
  //     if (content.style.display === "block") {
  //       content.style.display = "none";
  //     } else {
  //       content.style.display = "block";
  //     }
  //   });
  // }
</script>
<h1>My personnal projects</h1>
<button type="button" class="collapsible">This website</button>
<div class="collapsible_div">
  <p>I made this website mostly to display my pictures in a way that suits me better than social medias.<br/> But this website was also a way to experiment on web developping (PHP, HTML, CSS, JS) by building it from scratch using no other framework than my own custom made, which was quite a challenge and explains the not so exceptionnal results.<br/> The goal was to make dynamic pages that will not require to be handcrafted but will adapt to my content with a dedicated interface.<br/>A lot of work still needs to go into this project but time has been in short supply.</p>
</div>

<button type="button" class="collapsible">Engineering ethics</button>
<div class="collapsible_div">
  <p>During my last semester at Université de Technologies de Compiègne (UTC) in 2019 I chose to take an engeneering ethics class during which I, along with 2 classmates, had to choose a subject and study its ethical implications.<br/> The subject we chose was <b>Ethics of energy transition through the wind power sector</b>. Here is our report (in french) that got us our class's highest grade: <a class="button" href="ressources/files/Rapport_PH09_Hugo_Foraison_Adam_Potdevin_Leo_Lambert.pdf" download>download PDF</a></p>
</div>

<button type="button" class="collapsible">Converted van</button>
<div class="collapsible_div">
  <p>This has been the biggest project I have ever done, hundred of hours of work have been necessary. Cutting new windows, insulating, panneling, flooring, electricity, plumbing, carpentry... This has been an intense experience but I learnt so much from it !</p><br/>
  <img src="ressources/fixed_images/camion1.png" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/camion2.png" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/camion3.png" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/camion4.png" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/camion7.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/camion5.png" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/camion6.png" alt="profile_photo" class="project-img">

</div>

<button type="button" class="collapsible">Flat renovation</button>
<div class="collapsible_div">
  <p>After acquiring a flat I made some renovation, including paint, tiling, changing a sink, plumbing, restoring wood workplan and wood stairs, building a composter... And more to come !</p><br/>
  <img src="ressources/fixed_images/appart1.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart2.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart3.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart4.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart5.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart6.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart7.jpg" alt="profile_photo" class="project-img">
  <img src="ressources/fixed_images/appart8.jpg" alt="profile_photo" class="project-img">


</div>