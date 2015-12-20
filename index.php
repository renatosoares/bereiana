<?php
  require 'head.php';
  require 'header.php';
 ?>

 <!-- Section: intro -->
   <section id="intro" class="intro">

   <div class="slogan">
     <h2>Nunc suscipit <span class="text_color">Lorem ipsum</span> </h2>
     <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit.</h4>
   </div>
   <div class="page-scroll">
     <a href="#posts" class="btn btn-circle">
       <i class="fa fa-angle-double-down animated"></i>
     </a>
   </div>
   </section>
 <!-- /Section: intro -->

 <!-- news -->
 <section id="posts" class="home-section text-center">
 <div class="heading-contact">
   <div class="container">
   <div class="row">
     <div class="col-lg-8 col-lg-offset-2">
       <div class="wow bounceInDown" data-wow-delay="0.4s">
       <div class="section-heading">
       <h2>News</h2>

       </div>
       </div>
     </div>
   </div>
   </div>
 </div>
 <div class="container">
   <div class="row">


     <div class="col-sm-12 col-md-6" >
       <div class="row">
         <div class="col-md-7">
           <div class="ih-item square colored effect6 from_left_and_right"><a href="#">
             <div class="img"><img src="http://placehold.it/310x210" alt="Título da postagem"></div>
             <div class="info">
               <h3>Heading here</h3>
               <p>Description goes here</p>
             </div></a>
           </div>
         </div>

         <div class="col-md-5">
           <div class="caption">
             <h3>Título da postagem</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in nibh risus. Proin ut leo sed neque molestie blandit vel sed ipsum. Vestibulum a sed.</p>
           </div>
         </div>
       </div> <!-- /row -->
       <hr>
     </div> <!-- /col6 -->

<!-- ******************************************************************************************* -->

     <div class="col-sm-12 col-md-6">
       <div class="row">
         <div class="col-md-7">
           <div class="ih-item square colored effect6 from_left_and_right"><a href="#">
             <div class="img"><img src="http://placehold.it/310x210" alt="Título da postagem"></div>
             <div class="info">
               <h3>Heading here</h3>
               <p>Description goes here</p>
             </div></a>
           </div>
         </div>

         <div class="col-md-5">
           <div class="caption">
             <h3>Título da postagem</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in nibh risus. Proin ut leo sed neque molestie blandit vel sed ipsum. Vestibulum a sed.</p>
           </div>
         </div>
       </div> <!-- /row -->
       <hr>
     </div> <!-- /col6 -->
  <!-- ******************************************************************************************* -->

  <!-- ******************************************************************************************* -->

       <div class="col-sm-12 col-md-6">
         <div class="row">
           <div class="col-md-7">
             <div class="ih-item square colored effect6 from_left_and_right"><a href="#">
               <div class="img"><img src="http://placehold.it/310x210" alt="Título da postagem"></div>
               <div class="info">
                 <h3>Heading here</h3>
                 <p>Description goes here</p>
               </div></a>
             </div>
           </div>

           <div class="col-md-5">
             <div class="caption">
               <h3>Título da postagem</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in nibh risus. Proin ut leo sed neque molestie blandit vel sed ipsum. Vestibulum a sed.</p>
             </div>
           </div>
         </div> <!-- /row -->
           <hr>
       </div> <!-- /col6 -->
    <!-- ******************************************************************************************* -->
    <!-- ******************************************************************************************* -->

         <div class="col-sm-12 col-md-6">
           <div class="row">
             <div class="col-md-7">
               <div class="ih-item square colored effect6 from_left_and_right"><a href="#">
                 <div class="img"><img src="http://placehold.it/310x210" alt="Título da postagem"></div>
                 <div class="info">
                   <h3>Heading here</h3>
                   <p>Description goes here</p>
                 </div></a>
               </div>
             </div>

             <div class="col-md-5">
               <div class="caption">
                 <h3>Título da postagem</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in nibh risus. Proin ut leo sed neque molestie blandit vel sed ipsum. Vestibulum a sed.</p>
               </div>
             </div>
           </div> <!-- /row -->
             <hr>
         </div> <!-- /col6 -->
      <!-- ******************************************************************************************* -->

   </div> <!-- row -->

 </div>
</section>
<!-- /news -->

 <!-- Section: contact -->
   <section id="contact" class="home-section text-center">
   <div class="heading-contact">
     <div class="container">
     <div class="row">
       <div class="col-lg-8 col-lg-offset-2">
         <div class="wow bounceInDown" data-wow-delay="0.4s">
         <div class="section-heading">
         <h2>Consectetur adipiscing</h2>
         <i class="fa fa-2x fa-angle-down"></i>
         </div>
         </div>
       </div>
     </div>
     </div>
   </div>
   <div class="container">

   <div class="row">
     <div class="col-lg-2 col-lg-offset-5">
       <hr class="marginbot-50">
     </div>
   </div>
   <div class="row">
       <div class="col-lg-8">
           <div class="boxed-grey">
               <form id="contact-form">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="name">
                               Name</label>
                           <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                       </div>
                       <div class="form-group">
                           <label for="email">
                               Email Address</label>
                           <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                               </span>
                               <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                       </div>
                       <div class="form-group">
                           <label for="subject">
                               Subject</label>
                           <select id="subject" name="subject" class="form-control" required="required">
                               <option value="na" selected="">Choose One:</option>
                               <option value="service">General Customer Service</option>
                               <option value="suggestions">Suggestions</option>
                               <option value="product">Product Support</option>
                           </select>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="name">
                               Message</label>
                           <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                               placeholder="Message"></textarea>
                       </div>
                   </div>
                   <div class="col-md-12">
                       <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                           Send Message</button>
                   </div>
               </div>
               </form>
           </div>
       </div>

   <div class="col-lg-4">
     <div class="widget-contact">
       <h5>Main Office</h5>

       <address>
         <strong>Squas Design, Inc.</strong><br>
         Tower 795 Folsom Ave, Beautiful Suite 600<br>
         San Francisco, CA 94107<br>
         <abbr title="Phone">P:</abbr> (123) 456-7890
       </address>

       <address>
         <strong>Email</strong><br>
         <a href="mailto:#">email.name@example.com</a>
       </address>
       <address>
         <strong>We're on social networks</strong><br>
                       <ul class="company-social">
                           <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                           <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                           <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
       </address>

     </div>
   </div>
   </div>

   </div>
 </section>
 <!-- /Section: contact -->

 <?php require 'footer.php'; ?>
