<!DOCTYPE html>
<html lang="[[++cultureKey]]">
  <head>
    [[$j19CleanMeta]]

    [[$j19CleanOpenGraph]]

    [[$j19CleanCSS]]

  </head>

  <body>

    [[$j19CleanNav]]

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('[[*j19CleanMastHead]]')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>[[*pagetitle]]</h1>
              <h2 class="subheading">[[*j19CleanSubheading]]</h2>
              <span class="meta">Posted on [[*publishedon:strtotime:date=`%A %B %d, %Y`]]</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            [[*content]]
          </div>
        </div>
      </div>
    </article>

    <hr>

    [[$j19CleanFooter]]

    [[$j19CleanJS]]
  </body>
</html>
