<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="$BaseHref">$SiteConfig.Title</a>
  <ul class="navbar-nav ml-auto">
      <% if $CurrentUser %>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome $CurrentUser.Email
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/Security/logout?SecurityID=$SecurityID">Logout</a>
        </div>
      </li>
      <% else %>
      <li class="nav-item">
        <a class="nav-link" href="/Security/login" title="Login">
        Login
        </a>
      </li>
      <% end_if %>
  </ul>
</nav>
