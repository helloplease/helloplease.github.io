---
layout: page
title: Contact
permalink: /contact/
categories: nav
---

<div class="">
  <h4>say hello</h4>
  <p>Want to chat about a project or just say hi? Send us a note!</p><br>

<form class="col-sm-10 col-md-12 contact" action="http://getsimpleform.com/messages?form_api_token=ed716dc5a03aa8c84d659d595fd6ed31" method="post">
    <!-- the redirect_to is optional, the form will redirect to the referrer on submission -->
    <input type='hidden' name='redirect_to' value='http://helloplease.me/thanks.html' />
    <!-- all your input fields here.... -->
    <div class="form-group">
      <input type="text" class="form-control required" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control required" name="email" placeholder="Email">
    </div>
     <div class="form-group">
      <input type="text" class="form-control" name="tel" placeholder="Telephone">
    </div>
    <div class="form-group">

    <textarea class="form-control" name="message" placeholder="Type a nice message" rows="5"></textarea>
</div>
<input type='submit' value='Send'/>
</form>
    
<p id="error"></p>
</div>