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
          <div class="page-heading">
            <h1>[[*pagetitle]]</h1>
            <span class="subheading">[[*j19CleanSubheading]]</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        [[*content]]
      </div>
    </div>
  </div>


  <!-- Last 4 Posts -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        [[!j19CleanPaginator?
          &parents=`[[++j19Clean.blog]]`
          &chunk=`j19CleanPostItem`
          &limit=`[[*j19CleanLimit]]`
        ]]

        <!-- Pager -->
        <div class="clearfix">
          [[!+paginator.previous:notempty=`
          <a class="btn btn-primary float-left" href="[[~[[++j19Clean.blog]]? &page=`[[!+paginator.previous]]` &limit=`[[!+paginator.limit]]` ]]">Previous Posts &larr;</a>`
          ]]
          [[!+paginator.next:notempty=`
          <a class="btn btn-primary float-right" href="[[~[[++j19Clean.blog]]? &page=`[[!+paginator.next]]` &limit=`[[!+paginator.limit]]` ]]">Older Posts &rarr;</a>`]]
        </div>
      </div>
    </div>
  </div>

  <hr>

  [[$j19CleanFooter]]

  [[$j19CleanJS]]
  </body>
</html>
