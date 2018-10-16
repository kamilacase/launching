<?php /* Template Name: Codi'n Loading */ ?>

<?php
get_header();
?>
<div class="content">
    <section class="countdown">
        <h2>We are Launching in </h2>
        <h3> <span>5</span> Days</h3>
        <p>Codi - High Quality Bootstrap HTML5 Comming soon Landing Page Template Come with fully responsive layout, Cool features, and Clean design.</p>
        <small>Template Handcrafted by <span> Codi'n Camp </span></small>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#mail">Notify Me</button>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#about_us" >About US</button>
    </section>
    <!-- =========MODALS NOTIFY -->
    <div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="mail" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Get Notify</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="about_us" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores ipsa nulla sapiente illum quod! Modi aliquam quo, dolorum odit voluptas quibusdam harum, odio obcaecati ipsam libero non, excepturi itaque corporis!

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis delectus sint adipisci explicabo quisquam, voluptatum accusamus esse id magni fugiat maiores voluptas, consequatur tenetur deleniti dolor mollitia ex pariatur cumque?

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id natus doloribus, quidem tenetur odit ducimus itaque accusamus! Consequuntur eum commodi quis vero eveniet qui eligendi autem fugiat! Nihil, consequuntur modi.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>

<?php
get_footer();
