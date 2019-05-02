<div class="container">
    <div class="row">
        <section class="col-md-10 col-md-offset-1">
            <div class="page-header">
                $Breadcrumbs
                <h1>$Title</h1>
            </div>
        </section>
    </div>
    <div class="row">
    <section class="col-md-7 col-md-offset-1">

            <% if $Content.RichLinks %>
                $Content.RichLinks
            <% end_if %>
        </section>

        <% if SpecialContentHeadline && SpecialContent %>
    <h3>$SpecialContentHeadline</h3>
    <div>$SpecialContent</div>
    <hr />
    <p class="text-center">$CurrentDateTime</p>
  <% end_if %>

  <section class="col-md-10 col-md-offset-1">
        <h3>Booking Enquiry</h3>
        $EnquiryForm
    </section>


        <aside class="col-md-3">

          <% loop $Children %>
      <div>
          <h3>$Title</h3>
          <p>
              $Intro
              <a href="$Link">Read more...</a>
          </p>
          <hr />
      </div>
  <% end_loop %>


        <!--<% loop $Children %>
          <div>
              <h3>$Title</h3>
              <p>$Content.LimitCharacters(50)
                  <a href="$Link">Read more...</a>
              </p>
              <hr />
          </div>
        <% end_loop %> -->

            <% include SidebarNav %>
        </aside>
    </div>
</div>
<% include PageUtilities %>
