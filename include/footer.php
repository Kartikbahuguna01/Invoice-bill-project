<div class="footer" style="margin-top: 1200px;">
      
      <div class="l">

       <img class="l" src="images/logoc.png" alt="" style="height: 80px; width: 80px; border-radius: 50%;  margin-top: 40px;"> 
       
    </div>


      <div class="pnt">

       <div class="pnt1">
          <a class="a" href="" style="margin-left: 30px;">About Us</a>
          <a  class="a" href="" style="margin-left: 26px; margin-top: 20px;">Our Heritage</a>
          <a  class="a" href="" style="margin-left: 26px; margin-top: 20px;">Our Company</a>
          <a   class="a"href="" style="margin-left: 26px; margin-top: 20px;">Caffehouse</a>


       </div>
       <div class="pnt1">

          <a   class="a"href="" style="margin-left: 27px;">Responsibility</a>
          <a  class="a" href="" style="margin-left: 29px; margin-top: 20px;">Community</a>
          <a  class="a" href="" style="margin-left: 29px; margin-top: 20px;">Diversity</a>
          <a   class="a"href="" style="margin-left: 29px; margin-top: 20px;">Environmnet</a>
      

       </div>
        <div class="pnt1">
       
          <a  class="a" class="a" href="" style="margin-left: 30px;">Quick Links</a>
          <a   class="a"href="" style="margin-left:30px; margin-top: 20px;"> Gifting</a>
          <a  class="a" href="" style="margin-left:30px; margin-top: 20px;">Customer Care</a>
          <a  class="a" href="" style="margin-left:30px; margin-top: 20px;">Privacy policy</a>



        </div>

    
       </div>


   <hr style="margin-top: 200px; color: rgb(255, 255, 255); width: 80%; margin-left: 120px; ">

      <div class="footerpnt">
      
        <div class="point1">Privacy Statement</div>
        <div class="point1">Term of Use</div>
        <div class="point1">Contact Us</div>
        <div class="point" style="margin-left:200px;"><p style="margin-left: 20px;">© 2023 Starbucks Coffee Company. All rights reserved.</p></div>
        

      </div>

   </div>
  </div>


</div>

<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('.carousel img');
  const dots = document.querySelectorAll('.dot');

  // Function to show the current slide and update the active dot
  function showSlide(index) {
      slides.forEach((slide) => {
          slide.style.display = 'none';
      });
      dots.forEach((dot) => {
          dot.classList.remove('active');
      });
      slides[index].style.display = 'block';
      dots[index].classList.add('active');
  }

  // Function to automatically advance to the next slide
  function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
  }

  // Show the first slide initially
  showSlide(currentIndex);

  // Automatically advance to the next slide every 3 seconds (adjust as needed)
  setInterval(nextSlide, 4010);
</script>

</body>
</html>