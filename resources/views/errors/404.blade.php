
<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Error - Pages</title>


  </head>

  <body>
    <!-- Content -->

  <!-- Error -->
    <div class="container-xxl container-p-y text-center">
      <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Page Not Found :(</h2>
        <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
        <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Back to home</a>
        <div class="mt-3">
          <img
            src="{{asset('admin/assets/img/illustrations/page-misc-error-light.png')}}"
            alt="page-misc-error-light"
            width="500"
            class="img-fluid"
            data-app-dark-img="illustrations/page-misc-error-dark.png"
            data-app-light-img="illustrations/page-misc-error-light.png"
          />
        </div>
      </div>
    </div>
    <!-- /Error -->

    <!-- / Content -->


  </body>
</html>

