<div class="container">
  <section class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-4">@lang('comiziamo/lang.contact')</h2>
    <p class="text-center w-responsive mx-auto mb-5">@lang('comiziamo/lang.title_contact')</p>
    <div class="row">
      <div class="col-md-12 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="/contact_comiziamo.php" method="POST">
          <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" name="contact_name" class="form-control" required="" placeholder="@lang('comiziamo/lang.name')">
                <label for="name" class="">@lang('comiziamo/lang.name')</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" name="contact_email" class="form-control" required="" placeholder="Email">
                <label for="email" class="">Email</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" name="contact_subject" class="form-control" required="" placeholder="@lang('comiziamo/lang.subject')">
                <label for="subject" class="">@lang('comiziamo/lang.subject')</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form">
                <textarea type="text" name="contact_message" rows="2" class="form-control md-textarea" required="" placeholder="@lang('comiziamo/lang.message')..."></textarea>
                <label for="message">@lang('comiziamo/lang.message')</label>
              </div>
            </div>
          </div>
          <div class="text-center text-md-right">
            <button class="btn btn-secondary" type="submit">@lang('comiziamo/lang.send')</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
