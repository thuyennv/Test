@extends('user.master')
<div class="map">
 <div class="contact_logo">
<a href="index.html"><img src="{{Asset('user/images/c_logo.png')}}" alt=""/></a>
</div>
 <div style="width: 100%"><iframe width="100%" height="350" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=350&amp;hl=en&amp;q=263%20Gi%E1%BA%A3i%20Ph%C3%B3ng+(Shape)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/crear-un-mapa-de-google/">cómo hacer un mapa personalizado</a> by <a href="http://www.maps.ie/">Maps.ie</a></iframe></div><br />
</div>
@section('content')
   <div class="main">
    <div class="content_box">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="dreamcrub">
           <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Contact Us
                    </li>
                </ul>
                <ul class="previous">
                  <li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
         </div>
         <div class="singel_right">
           <div class="lcontact span_1_of_contact">
              <div class="contact-form">
                    <form class="form-horizontal" action="{!! url('lien-he')  !!}"  method="post">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <p class="comment-form-author"><label for="author">Your Name:</label>
                      <input id="name" name="name" type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
                    </p>
                    <p class="comment-form-author"><label for="author">Email:</label>
                     <input type="text" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    </p>
                    <p class="comment-form-author"><label for="author">Message:</label>
                    <textarea id="message" name="messages" value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
                    </p>
                    <input name="submit" type="submit" id="submit" value="Submit">
                  </form>
               </div>
           </div>
           <div class="contact_grid span_2_of_contact_right">
          <h3>Address</h3>
            <div class="address">
            <i class="pin_icon"></i>
              <div class="contact_address">
              Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="address">
            <i class="phone"></i>
              <div class="contact_address">
               1-25-2568-897
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="address">
            <i class="mail"></i>
              <div class="contact_email">
              info(at)shape.com
              </div>
              <div class="clearfix"></div>
          </div>
            </div>
            <div class="clearfix"></div>
        </div>
       </div>
      </div>
       </div>
      </div>
      </div>
</body>
@endsection
</html>   